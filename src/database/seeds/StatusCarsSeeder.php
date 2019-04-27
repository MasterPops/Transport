<?php

use Illuminate\Database\Seeder;
use App\Statuses_car;

class StatusCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Statuses_car();
        $status->status = 'Свободна';
        $status->save();
        $status = new Statuses_car();
        $status->status = 'В рейсе';
        $status->save();
        $status = new Statuses_car();
        $status->status = 'Неисправна';
        $status->save();
        $status = new Statuses_car();
        $status->status = 'На ремонте';
        $status->save();
    }
}
