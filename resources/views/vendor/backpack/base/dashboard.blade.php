@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Info
                    </div>
                </div>

                <div class="box-body">

                    <div class="col-md-4 col-sm-12">
                        <div class="info-box">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-red"><i class="fa fa-user-o"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Users</span>
                                <span class="info-box-number">{{\App\User::where('is_admin',false)->count()}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="info-box">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-green"><i class="fa fa-user-o"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Admins</span>
                                <span class="info-box-number">{{\App\User::where('is_admin',true)->count()}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="info-box">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Courses</span>
                                <span class="info-box-number">{{\App\Course::count()}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="info-box">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-aqua-gradient"><i class="fa fa-cube"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Category</span>
                                <span class="info-box-number">{{\App\Models\Category::count()}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="info-box">
                            <!-- Apply any bg-* class to to the icon to color it -->
                            <span class="info-box-icon bg-blue-active"><i class="fa fa-file"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pages</span>
                                <span class="info-box-number">{{\Backpack\PageManager\app\Models\Page::count()}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
