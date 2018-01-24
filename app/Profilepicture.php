<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilepicture extends Model
{
    protected $fillable=[

        "name","profile_picture"
    ];


    public $timestamps  = false;
}
