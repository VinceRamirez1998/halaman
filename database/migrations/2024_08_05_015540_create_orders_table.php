<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing id column
            
            // Adding columns as per the SQL statement
            $table->string('image');
            $table->string('order_id');
            $table->string('user_id');
            $table->string('username');
            $table->decimal('total', 16, 2);
            $table->enum('status', [
                'PENDING', 'PROCESSING', 'PACKED', 'DELIVERED', 
                'COMPLETED', 'REQUESTED FOR REFUND', 'REFUNDED', 
                'REJECTED'
            ]);
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
            
            // Additional columns
            $table->decimal('delivery_fee', 8, 2)->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_id')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('quantity')->nullable();
            $table->string('address');
            
            // Set the table's engine and charset
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
