@extends('layouts.app', [
    'namePage' => 'Bem-vindo ao SAM!',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/bg-w3.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="row justify-content-center">
                          <div class="col-lg-12 col-md-9">
                              <h2 class="text-white">{{ __('Alarmes Monitorados') }}</h2>
                              <h3 class="text-white">{{ __('O Sistema de alarme ideal pra você e o seu imóvel') }}</h3>
                              <p class="text-lead text-light mt-3 mb-0">
                                  @include('alerts.migrations_check')
                              </p>
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
