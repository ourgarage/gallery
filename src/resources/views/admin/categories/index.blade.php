@extends('admin.main')

@section('body-title')
    {{ trans('gallery::gallery.admin.categories-index.title') }}

    <a href="{{ route('gallery::categories::create') }}" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i> {{ trans('gallery::gallery.admin.button.create') }}
    </a>
@endsection

@section('body')
    <div>
        @if(!$categories->isEmpty())

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>{{ trans('contacts::contacts.admin.table.title-text') }}</th>
                        <th>{{ trans('contacts::contacts.admin.table.title-update') }}</th>
                        <th>{{ trans('contacts::contacts.admin.table.title-options') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        @else
            <div class="no-results text-center">
                <i class="fa fa-tags fa-3x"></i>
                <p>{{ trans('gallery::gallery.admin.categories-index.empty') }}</p>
            </div>
        @endif
    </div>
@endsection

