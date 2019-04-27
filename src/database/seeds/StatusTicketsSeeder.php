<?php

use Illuminate\Database\Seeder;
use App\Statuses_ticket;

class StatusTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Statuses_ticket();
        $status->status = 'Открыт';
        $status->save();
        $status = new Statuses_ticket();
        $status->status = 'Закрыт';
        $status->save();
    }
}
