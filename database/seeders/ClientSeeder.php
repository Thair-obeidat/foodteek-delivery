<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Ahmad Khaled',
                'email' => 'ahmad.khaled@example.com',
                'phone' => '+962777123456',
                'address' => 'Amman, Jordan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sara Al-Majali',
                'email' => 'sara.majali@example.com',
                'phone' => '+962799654321',
                'address' => 'Zarqa, Jordan',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
