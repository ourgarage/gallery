<?php

namespace Ourgarage\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $table = 'gallery_categories';

    protected $fillable = ['name', 'description', 'icon'];

    public function pictures()
    {
        return $this->belongsToMany('Ourgarage\Gallery\Models\GalleryPicture', 'gallery_categories_lists', 'category_id', 'picture_id');
    }
}
