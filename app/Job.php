<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'empleo','Empresa','desde','hasta','descripcion'
    ];
}
