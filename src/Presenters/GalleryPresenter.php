<?php

namespace Ourgarage\Gallery\Presenters;

use Ourgarage\Gallery\Models\GalleryCategory;
use Illuminate\Database\QueryException;
use Ourgarage\Gallery\Models\GalleryPicture;

class GalleryPresenter
{
    /**
     * Gallery Categories
     *
     * @return mixed
     */
    public function getAllCategories($sort = null, $key = null)
    {
        return GalleryCategory::orderBy(is_null($key) ? 'id' : $key, is_null($sort) ? 'asc' : 'desc')->get();
    }

    /**
     * Gallery Categories
     *
     * @param $data
     * @return bool
     */
    public function createCategory($data)
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
    public function getCategoryById($id)
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
    public function updateCategory($data, $id)
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
    public function destroyCategory($id)
    {
        try {
            GalleryCategory::destroy($id);
        } catch (QueryException $e) {
            return true;
        }
    }

    /**
     * Gallery Pictures
     *
     * @param null $desc
     * @return mixed
     */
    public function getAllPictures($desc = null)
    {
        return GalleryPicture::orderBy('id', !is_null($desc) ? 'desc' : 'asc')->get();
    }
}
