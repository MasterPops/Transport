<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function getStatus()
    {
        return $this->belongsTo('App\Statuses_car','status');
    }
}
