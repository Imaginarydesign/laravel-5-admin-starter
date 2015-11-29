@extends('app')

@section('content')

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">2,000</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-sm-8">
                <!-- TABLE: Temps -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Temps</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($temps) > 0)
                                        @foreach ($temps as $temp)
                                        <tr>
                                            <td>{{ $temp->id }}</td>
                                            <td><a href="{{ action('TempController@edit', $temp->id) }}">{{ $temp->name }}</a></td>
                                            <td><span class="label label-warning">{{ $temp->status }}</span></td>
                                            <td>{{ $temp->reason }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" style="text-align: center;">No clients</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ url('/temp/create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add new</a>
                        <a href="{{ url('/temp') }}" class="btn btn-sm btn-default btn-flat pull-right">View All</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>

            <div class="col-sm-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Temps</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            @if (count($temps) > 0)
                                @foreach ($temps as $temp)
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ url('images/user1.jpg') }}" alt="Product Image"/>
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript::;" class="product-title">{{ $temp->name }} <span class="label label-warning pull-right">{{ $temp->status }}</span></a>
                                            <span class="product-description">
                                                {{ $temp->reason }}
                                            </span>
                                        </div>
                                    </li><!-- /.item -->
                                @endforeach
                            @endif
                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ url('/temp') }}" class="uppercase">View All Products</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>
        </div>


    </section><!-- /.content -->
    
</div><!-- /.content-wrapper -->

@endsection
