@extends('layouts.app', [
    'namePage' => 'Register page',
    'activePage' => 'register',
    'backgroundImage' => asset('assets') . "/img/cameras5.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto mr-auto ">
          <!-- <div class="info-area info-horizontal mt-4">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-1_button-pause"></i>
            </div> 
            <div class="description ">
              <h5 class="info-title font-weight-bold">{{ __('Economia') }}</h5>
              <p class="description font-weight-bold">
                {{ __("Economia de até 100% com despesas relacionadas ao monitoramento.") }}
              </p>
            </div>
          </div> -->

          <!-- <div class="info-area info-horizontal mt-5">
            <div class="icon icon-info">
              <i class="fas fa-user-shield"></i>
            </div>
            <div class="description">
              <h5 class="info-title font-weight-bold">{{ __('Segurança') }}</h5>
              <p class="description font-weight-bold font-italic">
                {{ __('Atendimento de todos os eventos que aparecem na tela do operador, seguindo todos os procedimentos predeterminados na Ficha de Cadastro. Gravação e registro dos logs de todo o atendimento!') }}
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-primary">
              <i class="fas fa-heartbeat"></i>
            </div>
            <div class="description">
              <h5 class="info-title font-weight-bold">{{ __('Qualidade de Vida') }}</h5>
              <p class="description font-weight-bold font-italic">
                {{ __("Deixe de se preocupar com escalas, trabalhos noturnos, finais de semana e feriados. A sua nova Central de Monitoramento trabalha por você todos os dias!") }}
              </p>
            </div>
          </div>
          
        </div> -->
        <div class="col-md-12">
          <div class=" text-white text-center rounded shadow-lg " style="backdrop-filter: blur(10px);">
            <div class="card-header ">
              <!-- <h4 class="card-title">{{ __('Registar') }}</h4> -->
              <div class="logo-container mb-3">
                  <img src="{{ asset('assets/img/Sam/3x/Ativo 2.svg') }}" style="width:60px;" alt="">
              </div>
              <!-- <div class="social">
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button class="btn btn-icon btn-round btn-dribbble">
                  <a href="{{url('login/google')}}"></a>
                  <i class="fab fa-google"></i>
                </button>
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <h5 class="card-description">  {{ __('or be classical') }}</h5>
              </div> -->
            </div>
            <div class="card-body ">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <!--Begin input username -->
                <div class="input-group form-control-lg{{ $errors->has('username') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08 primary-color"></i>
                    </div>
                  </div>
                  <input class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome de utilizador') }}" type="text" name="username" value="{{ old('username') }}" required>
                  @if ($errors->has('username'))
                    <span class="invalid-feedback" style="display: block; " role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input name -->
                <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend" style="background-color:transparent;"> 
                    <div class="input-group-text" style="background-color:transparent;">
                      <i class="now-ui-icons users_circle-08" style="background-color:transparent;"></i>
                    </div>
                  </div>
                  <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" type="text" name="name" value="{{ old('name') }}" required style="background-color:transparent;">
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input email -->
                <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend" style="background-color:transparent;">
                    <div class="input-group-text" style="background-color:transparent;"> 
                      <i class="now-ui-icons ui-1_email-85" style="background-color:transparent;"></i>
                    </div>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required style="background-color:transparent;">
                 </div>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <!--Begin input user type-->
                <div class="input-group {{ $errors->has('product_key') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend" style="background-color:transparent;">
                    <div class="input-group-text" style="background-color:transparent;">
                      <i class="now-ui-icons objects_key-25" style="background-color:transparent;"></i>
                    </div>
                  </div>
                  <input class="form-control{{ $errors->has('product_key') ? ' is-invalid' : '' }}" placeholder="{{ __('Chave do produto') }}" type="text" name="product_key" value="{{ old('product_key') }}" required style="background-color:transparent;">
                 </div>
                 @if ($errors->has('product_key'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('product_key') }}</strong>
                    </span>
                @endif
                <!--Begin input password -->
                <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend" style="background-color:transparent;">
                    <div class="input-group-text" style="background-color:transparent;">
                      <i class="now-ui-icons objects_key-25" style="background-color:transparent;"></i>
                    </div>
                  </div>
                  <input id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Palavra-passe') }}" type="password" name="password" required style="background-color:transparent;">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                  <i class="fa fa-eye-slash py-3 ml-1" onclick="hideShow('password')"></i>
                </div>
                <!--Begin input confirm password -->
                <div class="input-group">
                  <div class="input-group-prepend" style="background-color:transparent;">
                    <div class="input-group-text" style="background-color:transparent;">
                      <i class="now-ui-icons objects_key-25" style="background-color:transparent;"></i></i>
                    </div>
                  </div>
                  <input id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar palavra-passe') }}" type="password" name="password_confirmation" required style="background-color:transparent;">
                  <i class="fa fa-eye-slash py-3 ml-1" onclick="hideShow('password_confirmation')"></i>
                </div>
                <div class="form-check text-left">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    {{ __('Eu concordo com os ') }}
                    <a href="#something">{{ __('termos e condições') }}</a>.
                  </label>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Começar')}}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });

    function hideShow(id) {
      var x = document.getElementById(id);
      if (x.type === id) {
        x.type = "text";
      } else {
        x.type = id;
      }
    }
  </script>
@endpush
