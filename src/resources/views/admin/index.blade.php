@extends('admin.main')

@section('body-title')

    {{ trans('contacts::contacts.admin.index-page-name') }}

    <a href="{{ route('contacts::admin::contactCreate') }}" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i> {{ trans('contacts::contacts.admin.create-btn') }}
    </a>

@endsection

@section('body')

    <div>
        @if(/*!$contacts->isEmpty()*/1==1)

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
                    //
                    </tbody>
                </table>
            </div>
        @else
            <div class="no-results text-center">
                <i class="fa fa-map-signs fa-3x"></i>
                <p>{{ trans('contacts::contacts.admin.no-contacts') }}</p>
            </div>
        @endif
    </div>

@endsection

