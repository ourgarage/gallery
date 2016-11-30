<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryPicturesTable extends Migration
{
    public function up()
    {
        Schema::create('gallery_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('gallery_pictures');
    }
}
