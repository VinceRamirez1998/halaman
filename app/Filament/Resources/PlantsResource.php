<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Plants;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PlantsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PlantsResource\RelationManagers;

class PlantsResource extends Resource
{
    
    protected static ?string $model = Plants::class;
    protected static ?int $navigationSort = -2;
    protected static ?string $navigationIcon = 'heroicon-o-globe-asia-australia';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\FileUpload::make('image')
                ->nullable()
                ->downloadable()
                ->preserveFilenames()
                ->columnSpan(2), // Span 2 columns if needed
        
            Forms\Components\TextInput::make('name')
                ->required()
                ->columnSpan(1), // Span 1 column
        
            Forms\Components\TextInput::make('stocks')
                ->required()
                ->columnSpan(1), // Span 1 column
            Forms\Components\TextInput::make('remarks')
            ->nullable()
            ->columnSpan(1), // Span 2 columns if needed
            Forms\Components\DateTimePicker::make('published_at')
                ->default(Date::now()->timezone('Asia/Manila')->format('Y-m-d H:i:s'))
                ->disabled()
                ->columnSpan(1), // Span 2 columns if needed 
            Forms\Components\Hidden::make('user_id')
                ->default(auth()->id()), // Sets the current authenticated user's ID
            Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0.00)
                    ->prefix('₱'),
            Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\ImageColumn::make('image')
                ->searchable()
                ->columnSpan(2),
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                    ->prefix('₱')
                    ->sortable(),
            Tables\Columns\TextColumn::make('description')
                    ->searchable(),
            Tables\Columns\TextColumn::make('stocks')
                ->searchable(),
            Tables\Columns\TextColumn::make('remarks')
                ->searchable(),
            Tables\Columns\TextColumn::make('published_at')
                ->dateTime()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlants::route('/'),
            'create' => Pages\CreatePlants::route('/create'),
            'edit' => Pages\EditPlants::route('/{record}/edit'),
        ];
    }
}
