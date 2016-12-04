<?php

namespace Ourgarage\Gallery\Presenters;

use Ourgarage\Gallery\Models\GalleryCategory;
use Illuminate\Database\QueryException;

class GalleryPresenter
{
    /**
     * Gallery Categories
     *
     * @return mixed
     */
    public static function getAllCategories($desc = null)
    {
        return GalleryCategory::orderBy('id', !is_null($desc) ? 'desc' : 'asc')->get();
    }

    /**
     * Gallery Categories
     *
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

    /**
     * Gallery Categories
     *
     * @param $id
     * @return bool
     */
    public static function getCategoryById($id)
    {
        try {
            return GalleryCategory::find($id);
        } catch (QueryException $e) {
            return false;
        }
    }

    /**
     * Gallery Categories
     *
     * @param $data
     * @param $id
     * @return bool
     */
    public static function updateCategory($data, $id)
    {
        try {
            GalleryCategory::where('id', $id)->update([
                'name' => $data->name,
                'description' => $data->description,
                'icon' => $data->icon
            ]);
        } catch (QueryException $e) {
            return true;
        }
    }

    /**
     * Gallery Categories
     *
     * @param $id
     * @return bool
     */
    public static function destroyCategory($id)
    {
        try {
            GalleryCategory::destroy($id);
        } catch (QueryException $e) {
            return true;
        }
    }
}
