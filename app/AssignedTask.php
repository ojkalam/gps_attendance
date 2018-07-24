<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
   public function batch()                                              
    {
        return $this->belongsTo('App\Batch');
    }
}
