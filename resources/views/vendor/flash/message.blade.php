@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('flash_notification.message') }}
                    </div>
                </div>
            </div>
        </section>
    @endif
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
