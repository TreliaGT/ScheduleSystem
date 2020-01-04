<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Appointment extends Model
{
    protected $table = 'types_appointments';

    public function type_worker()
    {
        return $this->hasMany('App\Types_Worker', 'types_workers_id');
    }
}
