<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Products\Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;


    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class
        ]);
    }
}