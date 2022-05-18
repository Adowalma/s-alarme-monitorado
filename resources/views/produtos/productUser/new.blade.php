@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Cadastrar Postos',
    'activePage' => 'produto_user',
    'activeNav' => '',
])
@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          @include('alerts.personalizado.index')
              <!-- <a class="btn btn-primary btn-round text-white pull-right" href="#">Listar postos</a> -->
            <h4 class="card-title">{{__("Inserir novo produto")}}</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            @include('alerts.personalizado.index')
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
              <form method="POST" action="{{ route('produto.user.store') }}" enctype="multipart/form-data">
                @csrf
                <!--Begin input product_key-->
                <div class="input-group {{ $errors->has('id') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend" style="background-color:transparent;">
                    <div class="input-group-text" style="background-color:transparent;">
                      <i class="now-ui-icons objects_key-25" style="background-color:transparent;"></i>
                    </div>
                  </div>
                  <input class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" placeholder="{{ __('Identificador do produto') }}" type="number" name="id" value="{{ old('id') }}" required style="background-color:transparent;">
                 </div>
                 @if ($errors->has('id'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('id') }}</strong>
                    </span>
                @endif  
                <!--Begin input product_key-->
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

                <div class="card-footer d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Cadastrar')}}</button>
                </div>
              </form>
            </div>

          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-6 -->

    </div>
    <!-- end row -->
  </div>
  @endsection