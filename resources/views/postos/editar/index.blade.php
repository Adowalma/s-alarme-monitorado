@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Cadastrar Postos',
    'activePage' => 'postos create',
    'activeNav' => '',
])

@push('meta')
<meta name="uri" content="/{{$uri}}">
@endpush

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
              <!-- <a class="btn btn-primary btn-round text-white pull-right" href="#">Listar postos</a> -->
            <h4 class="card-title">{{__("Cadastrar Posto")}}</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
              <form method="PUT" action="{{ route('posto.update') }}" enctype="multipart/form-data">
                @csrf
                @include('forms._formPosto.index')
            
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Atualizar')}}</button>
                </div>
              </form>
            </div>

          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-6 -->

      <!-- mapa -->
      <div class="col-md-6">
        <div class="card ">
          <div class="card-body ">
            <div id="map" class="map"></div>
          </div>
        </div>
      </div>
      <!-- end mapa -->

    </div>
    <!-- end row -->
  </div>
  @endsection

  @push('js')
  
    <script src="{{asset('assets/js/map.js')}}"></script>
@endpush