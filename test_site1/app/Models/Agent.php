<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Agent extends Eloquent
{

    protected $fillable = [
        'name',
        'age',

    ];


}
