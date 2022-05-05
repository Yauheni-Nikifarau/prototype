<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
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
        Product::create(['name' => 'SSD 128 GB']);
        Product::create(['name' => 'SSD 200 GB']);
        Product::create(['name' => 'SSD 400 GB']);
        Order::factory(7)->create();
    }
}
