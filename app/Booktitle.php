<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booktitle extends Model
{
    //
    protected $fillable=[

        "name","authorname"
    ];


    public $timestamps  = false;
}
