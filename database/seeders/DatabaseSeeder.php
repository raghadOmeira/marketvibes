<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(categorySeeder::class); // Run Seeder Class
        $this->call(atagSeeder::class); // Run Seeder Class
        $this->call(shippings::class); // Run Seeder Class
        $this->call(imagesSeeder::class); // Run Seeder Class
        $this->call(order_details::class); // Run Seeder Class
        $this->call(orders::class); // Run Seeder Class
        $this->call(sliderSeeder::class); // Run Seeder Class
        $this->call(customer::class); // Run Seeder Class
        $this->call(AdminSeeder::class); // Run Seeder Class
        $this->call(payments::class); // Run Seeder Class
        $this->call(products::class); // Run Seeder Class
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
