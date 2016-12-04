<?php

namespace Ourgarage\Gallery\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Notifications;
use Ourgarage\Gallery\Http\Requests\GalleryCategoryRequest;
use Ourgarage\Gallery\Presenters\GalleryPresenter;

class GalleryCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = GalleryPresenter::getAllCategories();

        \Title::prepend(trans('dashboard.title.prepend'));
        \Title::append(trans('gallery::gallery.admin.title.categories-index'));

        return view('gallery::admin.categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \Title::prepend(trans('dashboard.title.prepend'));
        \Title::append(trans('gallery::gallery.admin.title.categories-create'));

        return view('gallery::admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GalleryCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryCategoryRequest $request)
    {
        $er = GalleryPresenter::createCategory($request);

        if ($er) {
            Notifications::error(trans('gallery::gallery.admin.notification.insert-error'), 'top');
            return redirect()->back()->withInput();
        }

        Notifications::success(trans('gallery::gallery.admin.notification.insert-success'), 'top');
        return redirect()->route('gallery::categories::index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = GalleryPresenter::getCategoryById($id);
        !$category == false ?: abort(404);

        \Title::prepend(trans('dashboard.title.prepend'));
        \Title::append(trans('gallery::gallery.admin.title.categories-create'));

        return view('gallery::admin.categories.create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryCategoryRequest $request, $id)
    {
        $er = GalleryPresenter::updateCategory($request, $id);

        if ($er) {
            Notifications::error(trans('gallery::gallery.admin.notification.insert-error'), 'top');
            return redirect()->back()->withInput();
        }

        Notifications::success(trans('gallery::gallery.admin.notification.update-success'), 'top');
        return redirect()->route('gallery::categories::index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $er = GalleryPresenter::destroyCategory($id);

        if ($er) {
            Notifications::error(trans('gallery::gallery.admin.notification.destroy-error'), 'top');
            return redirect()->back()->withInput();
        }

        Notifications::success(trans('gallery::gallery.admin.notification.destroy-success'), 'top');
        return redirect()->route('gallery::categories::index');
    }
}
