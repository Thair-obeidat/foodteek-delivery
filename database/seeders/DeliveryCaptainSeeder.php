<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DeliveryCaptainSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('delivery_captains')->insert([
            ['name' => 'Omar Saleh', 'phone' => '+962778888888', 'created_at' => now()],
            ['name' => 'Layla Hassan', 'phone' => '+962799999999', 'created_at' => now()]
        ]);
    }
}