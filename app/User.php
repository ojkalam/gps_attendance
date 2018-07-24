<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function attendance()
    {
        return $this->hasMany('App\Attendance');
    }

    public function batch()
    {
        return $this->hasMany('App\Batch');
    }

    public function assigned_task()                                              
    {
        return $this->hasMany('App\AssignedTask');
    }

    // public function batch()                                              
    // {
    //     return $this->hasManyThrough('App\Batch', 'App\Batch');
    // }



}
