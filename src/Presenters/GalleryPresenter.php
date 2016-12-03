<?php

namespace Ourgarage\Gallery\Presenters;

use Ourgarage\Gallery\Models\GalleryCategory;
use Illuminate\Database\QueryException;

class GalleryPresenter
{
    /**
     * @return mixed
     */
    public static function getAllCategories()
    {
        return GalleryCategory::get();
    }

    /**
     * @param $data
     * @return bool
     */
    public static function createCategory($data)
    {
        try {
            GalleryCategory::create([
                'name' => $data->name,
                'description' => $data->description,
                'icon' => $data->icon
            ]);
        } catch (QueryException $e) {
            return true;
        }
    }
}
