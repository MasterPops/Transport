<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function getCar()
    {
        return $this->belongsTo('App\Car','car');
    }

    public function getDriver()
    {
        return $this->belongsTo('App\Driver','driver');
    }

    public function getCustomer()
    {
        return $this->belongsTo('App\Customer','customer');
    }
}
