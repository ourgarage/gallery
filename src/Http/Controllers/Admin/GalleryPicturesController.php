<?php

namespace Ourgarage\Gallery\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Notifications;
use Ourgarage\Gallery\Presenters\GalleryPresenter;

class GalleryPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GalleryPresenter $presenter)
    {
        $pictures = $presenter->getAllPictures(true);

        \Title::prepend(trans('dashboard.title.prepend'));
        \Title::append(trans('gallery::gallery.admin.title.pictures-index'));

        return view('gallery::admin.pictures.index', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GalleryPresenter $presenter)
    {
        $categories = $presenter->getAllCategories(null, 'name');

        \Title::prepend(trans('dashboard.title.prepend'));
        \Title::append(trans('gallery::gallery.admin.title.pictures-create'));

        return view('gallery::admin.pictures.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
