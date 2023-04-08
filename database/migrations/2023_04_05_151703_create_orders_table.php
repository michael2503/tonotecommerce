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
            $table->id();
            $table->integer('user_id');
            $table->string('order_number', 150);
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('email', 150);
            $table->string('phone', 150);
            $table->text('address');
            $table->string('bus_stop', 150);
            $table->string('city', 150);
            $table->string('state', 150);
            $table->string('country', 150);
            $table->string('payment_method', 150);
            $table->double('total');
            $table->longText('product_json');
            $table->enum('status', ['Pending', 'Processing', 'Shipped', 'Delivered', 'Returned', 'Cancelled']);
            $table->timestamps();
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
