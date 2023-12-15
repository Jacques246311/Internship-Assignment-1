<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Property extends Eloquent
{


    protected $fillable = [
        'name',
//        'description',
//        'price',

    ];
}
