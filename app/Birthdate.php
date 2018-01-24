<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthdate extends Model
{
    protected $fillable=[

        "name","dob"
    ];


    public $timestamps  = false;
}
