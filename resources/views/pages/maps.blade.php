@extends('layouts.app', [
    'namePage' => 'Maps',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@push('meta')
<meta name="uri" content="/{{$uri}}">
@endpush

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Google Maps
          </div>
          <div class="card-body ">
            <div id="map_canvas" class="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <!-- <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="{{asset('assets')}}/js/map.js"></script>
@endpush