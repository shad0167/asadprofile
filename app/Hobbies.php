<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $fillable=[

        "name","hobbies"
    ];


    public $timestamps  = false;
}
