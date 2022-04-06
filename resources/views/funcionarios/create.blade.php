@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Cadastrar Funcionários',
    'activePage' => 'funcionarios_create',
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
          <!-- <a class="btn btn-primary btn-round text-white pull-right" href="{{route('funcionario.index')}}" title="Listar Funcionários">Listar</a> -->
            <h4 class="card-title">{{__("Cadastrar Funcionários")}}</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
              <form method="POST" action="{{ route('funcionario.store') }}" enctype="multipart/form-data">
                @csrf
                @include('forms._formFuncionario.index')            
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