<?php

namespace Ourgarage\Gallery\Presenters;

use Ourgarage\Gallery\Models\GalleryCategory;

class GalleryPresenter
{
    public function getAllCategories()
    {
        return GalleryCategory::get();
    }
}
