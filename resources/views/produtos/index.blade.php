@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Produtos',
    'activePage' => 'produtos',
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
              <a class="btn btn-primary btn-round text-white pull-right" href="{{route('produto.create')}}" title="Adicionar Produtos">Adicionar</a>
            <h4 class="card-title">{{__("Produtos")}}</h4>
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
                  <th>Nome</th>
                  <th>Chave do Producto</th>
                  <th>Descricao</th>
                  <th>Propietário</th>
                  <th>Estado</th>
                  <th class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              <tfoot>
              <tbody>
                @foreach($proprietario as $prop)
                <tr>
                  
                  <td>
                    {{$prop->name}}
                  </td>
                  <td> {{$prop->product_key}} </td>
                  <td>{{$prop->descricao}}</td>
                  <td>@if ($prop->user_id==null) Sem Propietário @else {{$prop->name}} @endif</td>
                  
                  <td>{{$prop->estado}}</td>
                  <td class="text-right">
                    <a type="button" href="#" rel="tooltip" class="btn btn-primary btn-icon btn-sm " data-original-title="" title="">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </a>
                  </td>
                  
                 </tr>
                 @endforeach
              </tbody>
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