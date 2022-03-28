@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/cameras.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="">
                          <div class="rounded shadow-lg" style="backdrop-filter: blur(8px); padding: 50px 50px 20px; width: 350px; heigth: 50px; margin-rigth:1000px; margin-top: -70px;">
                              <h3 class="text-white">{{ __('Proteja o Seu Patrimonio') }}</h3>
                              <h4 class="text-white">{{ __('O Sistema de alarme ideal pra você e o seu imóvel') }}</h4>
                              <p class="text-lead text-light mt-3 mb-0">
                                  @include('alerts.migrations_check')
                              </p>
                              <button type="button" class="btn btn-primary">Sobre Nós</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
