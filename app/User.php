<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function habilities()
    {
        return $this->hasMany('App\Hability');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    public function educations()
    {
        return $this->hasMany('App\Education');
    }

    public function hobbies()
    {
        return $this->hasMany('App\Hobbie');
    }

    public function profiles()
    {
        return $this->hasMany('App\Profile');
    }

    public function lenguages()
    {
        return $this->belongsToMany('App\Lenguage');
    }


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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
