@extends('admin.master')

@section('title')
    dashboard
@stop

@section('css')

@stop

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ trans('main_sidebar.Dashboard') }} </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ trans('main_sidebar.Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ trans('main_sidebar.Dashboard') }} </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{ App::getlocale() }}
    @endsection

    @section('js')
    @endsection
