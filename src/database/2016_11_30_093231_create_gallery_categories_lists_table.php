<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryCategoriesListsTable extends Migration
{
    public function up()
    {
        Schema::create('gallery_categories_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('picture_id');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('gallery_categories_lists');
    }
}

