<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'client_id' => 1,
                'message' => 'Your order is on the way!',
                'is_read' => false,
                'created_at' => now()
            ],
            [
                'client_id' => 2,
                'message' => 'Your order has been delivered!',
                'is_read' => true,
                'created_at' => now()
            ]
        ]);

    }
}