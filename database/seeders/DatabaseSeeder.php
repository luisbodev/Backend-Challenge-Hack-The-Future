<?php

namespace Database\Seeders;

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
        $this->call([
            SegmentSeeder::class,
            TypeSeeder::class,
            LocationSeeder::class,
            CategorySeeder::class,
            MaterialSeeder::class,
            CarbonFootprintDataSeeder::class,
        ]);
    }
}
