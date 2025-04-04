<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            OrderSeeder::class,
            NotificationSeeder::class,
            DeliveryLocationSeeder::class,
            OrderStatusUpdateSeeder::class,
            RestaurantSeeder::class,
            DeliveryCaptainSeeder::class,
        ]);
    }
}
