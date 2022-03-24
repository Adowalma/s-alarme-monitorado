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
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d126146.19779280316!2d13.2309949764458!3d-8.873198622845027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spolic%C3%ADa%20near%20Luanda!5e0!3m2!1sen!2sao!4v1645487822606!5m2!1sen!2sao" style="border:0; width: 100%; height: 350px; border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <!-- manter comentado mesmo quando descomentar os scripts abaixo<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="{{asset('assets')}}/js/map.js"></script> -->
@endpush