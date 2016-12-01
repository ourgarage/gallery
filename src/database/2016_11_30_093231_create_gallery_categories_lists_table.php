<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryCategoriesListsTable extends Migration
{
    public function up()
    {
        Schema::create('gallery_categories_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('picture_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('picture_id')->references('id')->on('gallery_pictures')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('gallery_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('gallery_categories_lists');
    }
}

