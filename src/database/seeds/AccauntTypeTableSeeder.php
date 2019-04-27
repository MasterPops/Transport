<?php

use Illuminate\Database\Seeder;
use App\Accaunt_type;

class AccauntTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $type = new Accaunt_type;
         $type->type = 'Пользователь';
         $type->save();
         $type = new Accaunt_type;
         $type->type = 'Администратор';
         $type->save();
         $type = new Accaunt_type;
         $type->type = 'Сотрудник технической поддержки';
         $type->save();
         $type = new Accaunt_type;
         $type->type = 'Модератор';
         $type->save();

    }
}
