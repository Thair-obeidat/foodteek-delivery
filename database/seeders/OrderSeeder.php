<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'client_id' => 1,
                'restaurant_id' => 1,
                'delivery_location_id' => 1,
                'status' => 'pending',
                'total_price' => 15.75,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'client_id' => 2,
                'restaurant_id' => 2,
                'delivery_location_id' => 2,
                'status' => 'completed',
                'total_price' => 22.50,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

