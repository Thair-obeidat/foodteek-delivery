<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeliveryCaptain;

class DeliveryCaptainSeeder extends Seeder
{
    public function run()
    {
        DeliveryCaptain::create([
            'full_name' => 'Ahmed Ali',
            'email' => 'ahmed@foodtek.com',
            'phone' => '0123456789',
            'vehicle_type' => 'Bike',
            'status' => 'Active',
        ]);
    }
}
