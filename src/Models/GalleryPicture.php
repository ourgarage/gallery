<?php

namespace Ourgarage\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryPicture extends Model
{
    protected $table = 'gallery_pictures';

    protected $fillable = ['name', 'description'];

    public function categories()
    {
        return $this->belongsToMany('Ourgarage\Gallery\Models\GalleryCategory', 'gallery_categories_lists', 'picture_id', 'category_id');
    }
}
