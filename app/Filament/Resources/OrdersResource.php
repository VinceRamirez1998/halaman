<?php

namespace App\Filament\Resources;


use Filament\Forms;
use Filament\Tables;
use App\Models\Orders;
use App\Models\Products;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrdersResource\Pages;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrdersResource\RelationManagers;

class OrdersResource extends Resource
{
    protected static ?string $model = Orders::class;

    protected static ?string $navigationIcon = 'heroicon-s-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form 
        ->schema([
            
       
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make(columns: 2)->schema([
                        Forms\Components\FileUpload::make('image')
                        ->label('Image'),
                        Forms\Components\TextInput::make('product_name')
                            ->label('Product Name'),
                            // ->disabled(),
                        Forms\Components\TextInput::make('product_id')
                            ->label('Product ID'),
                            // ->disabled(),
                        Forms\Components\TextInput::make('price'),
                        // ->disabled(),
                        Forms\Components\TextInput::make('quantity'),
                        // ->disabled(),
                        Forms\Components\TextInput::make('delivery_fee')
                        ->label('Delivery Fee'),
                            // ->disabled(),
                            Forms\Components\TextInput::make('total')
                            ->label('Total'),
                            //  ->disabled(),
                            // ->disabled(),
                    ])
                    ]),
                    
            
           
            Forms\Components\TextInput::make('order_id')
            ->label('Order ID')
                ->maxLength(255),
                // ->disabled(),
            Forms\Components\TextInput::make('user_id')
            ->label('User ID'),
            // ->disabled(),
          
            Forms\Components\TextInput::make('username')
            ->label('Customer'),
            // ->disabled(),
            Forms\Components\Select::make('status')
            ->label('Status')
            ->options([
                'PENDING' => 'PENDING',
                'TO PROCESS' => 'TO PROCESS',
                'TO PACK' => 'TO PACK',
                'PACKED' => 'PACKED',
                'TO DELIVER' => 'TO DELIVER',
                'DELIVERED' => 'DELIVERED',
               'DELIVERED' => 'DELIVERED',
                  'REFUNDED' => 'REFUNDED',
                    'REJECTED' => 'REJECTED',
                      'REQUEST FOR REFUND' => 'REQUEST FOR REFUND',
                        'CANCELLED' => 'CANCELLED',
            ]),
         
            Forms\Components\TextInput::make('date_created')
            ->default(Date::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s'))
            ->disabled(),
            Forms\Components\TextInput::make('date_updated')
                ->default(Date::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s'))
                ->disabled(),
             Forms\Components\TextInput::make('address')
                ->label('Address')
                    ->maxLength(255)
                    // ->disabled()
                    ->columnspan(2),
          
            
        ]);
    }

    public static function table(Table $table): Table
    {
       return $table
        
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->label('Image'),
                   Tables\Columns\TextColumn::make('product_name')
                    ->searchable()
                    ->label('Product Name'),
                    Tables\Columns\TextColumn::make('product_id')
                    ->searchable()
                    ->label('Product ID'),
                    Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('quantity')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('order_id')
                    ->searchable()
                    ->label('Order ID'),
                    Tables\Columns\TextColumn::make('user_id')
                    ->searchable()
                    ->label('User ID'),
                    Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('total')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('delivery_fee')
                    ->label('Delivery Fee')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('status')
                      ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('date_created')
                    ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('date_updated')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Action::make('Download')
                ->color('success')
                ->label('Download')
                ->icon('heroicon-s-arrow-down-tray')
                // ->url(fn($record) => route('orders.pdf.download', ['order' => $record->id]))
                ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
