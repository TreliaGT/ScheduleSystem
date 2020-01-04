<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function employee()
    {
        return $this->hasMany('App\Employee' );
    }


}
