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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->double('sales_price');
            $table->double('old_price')->nullable();
            $table->double('quantity');
            $table->double('sold')->default(0);
            $table->string('sku', 100);
            $table->string('category', 150);
            $table->text('images');
            $table->longText('description');
            $table->enum('status', ['Active', 'Pending', 'Finished']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
