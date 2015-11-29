@if (Session::has('flash_message'))
<section class="content-header">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissible fade in" role="alert" style="margin: 0;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ Session::get('flash_message') }}
      </div>
    </div>
  </div>
</section>
@endif

@if ($errors->any())
<section class="content-header">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger fade in" role="alert" style="margin: 0;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endif