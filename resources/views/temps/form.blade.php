@extends('app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('partials.flash')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_heading }}
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/clients"> {{ $page_heading }}</a></li>
            <li class="active">{{ $create ? 'Create' : 'Edit' }} temp</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $create ? 'Create' : 'Edit' }} temp</h3>
                    </div><!-- /.box-header -->
                    @if ($create)
                    <form action="/temp" method="POST" role="form" class="form-horizontal">
                    @else
                    <form action="/temp/{{ $temp->id }}" method="POST" role="form" class="form-horizontal">
                    <input type="hidden" name="_method" value="PUT">
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Temp name" value="{{ $create ? old('name') : $temp->name }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="{{ $create ? old('status') : $temp->status }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="reason" class="col-sm-2 control-label">Reason*</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="reason" id="reason" placeholder="Reason" value="{{ $create ? old('reason') : $temp->reason }}" required>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        @if (!$create)
                            <input type="hidden" name="id" value="{{ $temp->id }}">
                        @endif
                        <div class="box-footer">
                            <a href="{{ URL::previous() }}" class="btn btn-default" >Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>

</div>

@endsection