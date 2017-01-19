@extends('admin.main')

@section('css')
    <link href="/libs/select2/select2.min.css" rel="stylesheet" type='text/css'>
    <link href="/packages/gallery/css/gallery.css" rel="stylesheet" type='text/css'>
@endsection

@section('body-title')
    {{ trans('gallery::gallery.admin.pictures-create.title') }}
@endsection

@section('body')
    <div class="container-fluid">
        @include('admin.basis.notifications-page')
        <form class="form-horizontal" method="POST"
              action="{{ isset($picture) ? route('gallery::pictures::update', ['id' => $picture->id]) : route('gallery::pictures::store') }}">
            {{ csrf_field() }}
            {{ isset($picture) ? method_field('PUT') : '' }}
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-9 input-group">
                    fbgbbggb
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    {{ trans('gallery::gallery.admin.categories-create.form.icon.title') }}
                </label>
                <div class="col-sm-9 input-group">
                    <select id="galleryPictureCategories" multiple="multiple" name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-11 no-padding">
                    <button type="submit" class="btn btn-primary pull-right">
                        {{ isset($picture) ? trans('gallery::gallery.admin.categories-create.form.submit.update') :
                        trans('gallery::gallery.admin.categories-create.form.submit.create')}}
                    </button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection

@section('js')
    <script src="/libs/select2/select2.min.js"></script>
    <script src="/libs/select2/i18n/{{ App::getLocale() }}.js"></script>
    <script>var locale = "{{ App::getLocale() }}"; var placeholder = "{{ trans('gallery::gallery.admin.pictures-create.form.name.categories-placeholder') }}";</script>
    <script src="/packages/gallery/js/gallery.js"></script>
@endsection
