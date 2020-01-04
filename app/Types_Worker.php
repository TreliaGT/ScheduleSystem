<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types_Worker extends Model
{
    protected $table = 'types_workers';

    public function employee()
    {
        return $this->hasMany('App\Employee', 'employee_id');
    }

    public function type_appointment()
    {
        return $this->hasMany('App\Type_Appointment', 'types_appointment_id');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment' ,'types_workers_id');
    }

}
