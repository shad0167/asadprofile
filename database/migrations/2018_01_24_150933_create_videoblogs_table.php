<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoblogsTable extends Migration
{

    public function up()
    {
    Schema::create('videoblogs', function (Blueprint $table) {
    $table->increments('id');
    $table->string('video_link');
        $table->string('title');

    $table->text('short_description');
        $table->string('date');
    });
    }


    public function down()
    {
        Schema::dropIfExists('videoblogs');
    }


}
