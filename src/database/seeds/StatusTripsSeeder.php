<?php

use Illuminate\Database\Seeder;
use App\Statuses_trip;

class StatusTripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Statuses_trip();
        $status->status = 'Выполняется';
        $status->save();
        $status = new Statuses_trip();
        $status->status = 'Завершнено';
        $status->save();
    }
}
