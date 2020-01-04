<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function appointment()
    {
        return $this->belongsTo('App\Appointment','client_id');
    }
}
