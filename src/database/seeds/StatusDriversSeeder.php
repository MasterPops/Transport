<?php

use Illuminate\Database\Seeder;
use App\Statuses_driver;

class StatusDriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Statuses_driver();
        $status->status = 'Свободен';
        $status->save();
        $status = new Statuses_driver();
        $status->status = 'В рейсе';
        $status->save();
        $status = new Statuses_driver();
        $status->status = 'В отпуске';
        $status->save();
        $status = new Statuses_driver();
        $status->status = 'На больничном';
        $status->save();
    }
}
