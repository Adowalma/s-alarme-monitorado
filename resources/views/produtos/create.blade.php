@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Cadastrar Postos',
    'activePage' => 'produtos_create',
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
              <!-- <a class="btn btn-primary btn-round text-white pull-right" href="#">Listar postos</a> -->
            <h4 class="card-title">{{__("Cadastrar Produtos")}}</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
              <form method="POST" action="{{ route('produto.store') }}" enctype="multipart/form-data">
                @csrf
                @include('forms._formProduto.index')            
                <div class="card-footer d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Cadastrar')}}</button>
                </div>
              </form>
            </div>

          </div>
          <!-- end content-->
          @include('modals.ProductType')
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-6 -->

    </div>
    <!-- end row -->
  </div>
  @endsection