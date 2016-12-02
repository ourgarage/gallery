@extends('admin.main')

@section('body-title')
    {{ trans('gallery::gallery.admin.categories-create-update.title') }}
@endsection

@section('body')
    <div class="container-fluid">
        @include('admin.basis.notifications-page')
        <form role="form" method="POST" action="{{ route('login.post') }}">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="{{ trans('auth.form.login-email-placeholder') }}"
                           value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.button.login-submit') }}</button>
        </form>
    </div>
@endsection

