<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function client()
    {
        return $this->hasMany('App\Client', 'client_id');
    }

    public function Types_Worker()
    {
        return $this->hasMany('App\Client', 'types_workers_id');
    }
}
