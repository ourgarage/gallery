@extends('admin.main')

@section('body-title')
    {{ trans('gallery::gallery.admin.categories-create.title') }}
@endsection

@section('body')
    <section class="content">
        <div class="container-fluid">
            @include('admin.basis.notifications-page')
            {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('login.post') }}">--}}
            {{--{!! csrf_field() !!}--}}
            {{--<div class="form-group has-feedback">--}}
            {{--<label class="col-md-2">Title : *</label>--}}
            {{--<div class="col-md-8">--}}
            {{--<input type="text" name="title" class="form-control" value="">--}}
            {{--<span class="glyphicon glyphicon-header form-control-feedback"></span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.button.login-submit') }}</button>--}}
            {{--</form>--}}

            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        {{ trans('gallery::gallery.admin.categories-create.form.name.title') }}
                    </label>
                    <div class="input-group col-sm-9">
                        <input type="text" name="name"
                               placeholder="{{ trans('gallery::gallery.admin.categories-create.form.name.placeholder') }}"
                               class="form-control">
                        <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        {{ trans('gallery::gallery.admin.categories-create.form.description.title') }}
                    </label>
                    <div class="input-group col-sm-9">
                        <input type="text" name="description"
                               placeholder="{{ trans('gallery::gallery.admin.categories-create.form.description.placeholder') }}"
                               class="form-control">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        {{ trans('gallery::gallery.admin.categories-create.form.icon.title') }}
                    </label>
                    <div class="input-group col-sm-9">
                        <input type="text" name="icon"
                               placeholder="{{ trans('gallery::gallery.admin.categories-create.form.icon.placeholder') }}"
                               class="form-control">
                        <span class="input-group-addon"><i class="fa fa-font-awesome"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-9 callout callout-info">
                        <h4>{{ trans('gallery::gallery.admin.categories-create.form.icon.info.title') }}</h4>
                        <p>{!! trans('gallery::gallery.admin.categories-create.form.icon.info.text') !!}</p>
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
            </form>

        </div>
    </section>
@endsection

