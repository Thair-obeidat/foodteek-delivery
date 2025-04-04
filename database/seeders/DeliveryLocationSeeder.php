<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryLocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('delivery_locations')->insert([
            ['location' => 'Amman, Jordan', 'created_at' => now()],
            ['location' => 'Irbid, Jordan', 'created_at' => now()]
        ]);
    }
}


