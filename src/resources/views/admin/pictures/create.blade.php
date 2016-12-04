@extends('admin.main')

@section('body-title')
    {{ trans('gallery::gallery.admin.pictures-create.title') }}
@endsection

@section('body')
    <div class="container-fluid">
        @include('admin.basis.notifications-page')
        <form class="form-horizontal" method="POST"
              action="{{ isset($category) ? route('gallery::categories::update', ['id' => $category->id]) : route('gallery::categories::store') }}">
            {{ csrf_field() }}
            {{ isset($category) ? method_field('PUT') : '' }}
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
                    <select name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-11 no-padding">
                    <button type="submit" class="btn btn-primary pull-right">
                        {{ isset($category) ? trans('gallery::gallery.admin.categories-create.form.submit.update') :
                        trans('gallery::gallery.admin.categories-create.form.submit.create')}}
                    </button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
