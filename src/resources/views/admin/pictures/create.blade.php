@extends('admin.main')

@section('body-title')
    {{ trans('gallery::gallery.admin.pictures-create.title') }}
@endsection

@section('body')
    <div>
        @foreach($categories as $category)
            {{ $category->name }}<br>
        @endforeach
    </div>
@endsection

