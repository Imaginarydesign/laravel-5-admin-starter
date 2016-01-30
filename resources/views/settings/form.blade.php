@extends('app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('flash::message')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_heading }}
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Settings</h3>
                    </div><!-- /.box-header -->
                    <form action="/settings" method="POST" role="form" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $name ? $name : '' }}" required>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{ URL::previous() }}" class="btn btn-default" >Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>

</div>

@endsection