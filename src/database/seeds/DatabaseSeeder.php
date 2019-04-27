<?php

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
         $this->call(AccauntTypeTableSeeder::class);
         $this->call(StatusCarsSeeder::class);
         $this->call(StatusDriversSeeder::class);
         $this->call(StatusTicketsSeeder::class);
         $this->call(StatusTripsSeeder::class);
    }
}
