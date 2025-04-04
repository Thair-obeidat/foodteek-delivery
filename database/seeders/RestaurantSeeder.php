<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('restaurants')->insert([
            ['name' => 'Shawarma House', 'location' => 'Amman, Jordan', 'created_at' => now()],
            ['name' => 'Pizza Corner', 'location' => 'Zarqa, Jordan', 'created_at' => now()]
        ]);
    }
}
