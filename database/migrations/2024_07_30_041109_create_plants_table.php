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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('stocks')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('remarks', 2048)->nullable();
            $table->datetime('published_at')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
