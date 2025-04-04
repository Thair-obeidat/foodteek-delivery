<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusUpdateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_status_updates')->insert([
            ['order_id' => 1, 'status' => 'preparing', 'created_at' => now()],
            ['order_id' => 2, 'status' => 'delivered', 'created_at' => now()]
        ]);
    }
}

