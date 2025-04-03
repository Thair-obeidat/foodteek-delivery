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
    Schema::create('delivery_captains', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email')->unique();
        $table->string('phone', 15);
        $table->enum('vehicle_type', ['Bike', 'Car', 'Van']);
        $table->enum('status', ['Active', 'Inactive', 'Busy'])->default('Active');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_captains');
    }
};
