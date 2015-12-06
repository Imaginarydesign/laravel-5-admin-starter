@extends('app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('flash::message')
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $page_heading }}
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
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
                        <div class="box-tools">
                            <div class="input-group" style="width: 150px;">
                                <div class="pull-right" style="">
                                    <a href="/temp/create" class="btn btn-sm btn-default" >+ Add new</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($temps) > 0)
                                    @foreach ($temps as $temp)
                                    <tr>
                                        <td>{{ $temp->id }}</td>
                                        <td><a href="{{ action('TempController@edit', $temp->id) }}">{{ $temp->name }}</a></td>
                                        <td>
                                            <span class="label label-success">{{ $temp->status }}</span>
                                        </td>
                                        <td>{{ $temp->reason }}</td>
                                        <td class="text-right">
                                            <a href="{{ action('TempController@edit', $temp->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:deleteTemp({{$temp->id}});" class="btn btn-sm btn-danger" ><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" style="text-align: center;">No temps</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {!! $temps->appends(Input::except('page'))->render() !!}
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        @include('partials.loading')
    </section>

</div>

@endsection

@section('scripts')

<script type="text/javascript">

// Delete temp
function deleteTemp(id) {

if (confirm('Really delete?')) {
    $("#loading").show('slow');
    var token = "{!!  csrf_token()   !!}";
    var temp = id;
    console.log(temp);
    $.ajax({
      type: "POST",
      data: {_token: token, id: id, _method:"DELETE"},
      url: '/temp/' + id,
      success: function(result) {
        window.location = 'temp';
        $('.content-wrapper').prepend('<section class="content-header"><div class="row"><div class="col-md-12"><div class="alert alert-success">'+ result.message +'</div></div></div></section>');
      },
      complete: function(){
        $("#loading").hide('slow');
      }
    });
  }
}

</script>

@endsection