<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('client_id');
        $table->unsignedBigInteger('restaurant_id');
        $table->unsignedBigInteger('captain_id')->nullable(); 
        $table->decimal('total_price', 8, 2);
        $table->decimal('delivery_fee', 5, 2)->default(0.00); 
        $table->enum('status', ['pending', 'assigned', 'on the way', 'delivered', 'cancelled'])->default('pending');
        $table->timestamps();

        $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        $table->foreign('captain_id')->references('id')->on('delivery_captains')->onDelete('set null');
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
