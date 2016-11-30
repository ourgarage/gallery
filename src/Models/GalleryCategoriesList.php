<?php

namespace Ourgarage\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategoriesList extends Model
{
    protected $table = 'gallery_categories_lists';

    protected $fillable = ['picture_id', 'category_id'];
}
