@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Postos',
    'activePage' => 'postos',
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          @include('alerts.personalizado.index')
              <a class="btn btn-primary btn-round text-white pull-right" href="#">Add posto</a>
            <h4 class="card-title">{{__("Postos de Emergêrncia")}}</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date de Criação</th>
                  <th scope="col" class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              
            </table>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
  @endsection