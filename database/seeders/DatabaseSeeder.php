<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Client;
use App\Models\DeliveryCaptain;
use App\Models\Order;
use App\Models\Notification;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create adimn user for test
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // create 5 resturant
        Restaurant::factory(5)->create();

        // create 10 clients
        Client::factory(10)->create();

        // create 10 deliverycaptin
        DeliveryCaptain::factory(5)->create();

        // create 15 orders
        Order::factory(15)->create();

        // create 20 notification 
        Notification::factory(20)->create();
    }
}
