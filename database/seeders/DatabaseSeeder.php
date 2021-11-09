<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Condo;
use Faker\Factory;
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
        $this->call([CitySeeder::class]);
        //::factory()->count('10')->create();
        //Address::factory()->count('10')->create();

    }
}
