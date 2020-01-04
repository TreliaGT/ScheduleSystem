<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['id'];

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function type_worker()
    {
        return $this->belongsTo('App\Types_Worker');
    }
}
