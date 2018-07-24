<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function assigned_task()                                              
    {
        return $this->hasMany('App\AssignedTask');
    }
}
