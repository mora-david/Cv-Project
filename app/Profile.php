<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'Nombre','Apellidos','Intro','Num-Teléfonico','Correo'
    ];
}
