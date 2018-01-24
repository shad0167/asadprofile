<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoBlog extends Model
{
    protected $fillable=[

        "video_link","title","short_description","date"
    ];


    public $timestamps  = false;
}
