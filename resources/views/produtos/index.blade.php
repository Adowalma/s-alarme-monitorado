@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Produtos',
    'activePage' => 'produtos_listar',
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
          @can('venda') 
              <a class="btn btn-primary btn-round text-white pull-right" href="{{route('produto.create')}}" title="Adicionar Produtos">Adicionar</a>
            @endcan
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
                  <th>Imagem</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Stock</th>
                  <!-- <th>Propietário</th> -->
                  <!-- <th>Estado</th> -->
                  <th class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              <tfoot>
              <tbody>
                @foreach($products as $prop)
                <tr>
                  <td>
                    <img src="/uploads/{{ $prop->image }}" width="100px">
                  </td>
                  <td>
                    {{$prop->tipo}}
                  </td>
                  <td>{{$prop->descricao}}</td>
                  <td>{{$prop->preco}}</td>
                  <!-- <td>@if ($prop->user_id==null) Sem Propietário @else {{$prop->name}} @endif</td> -->
                  
                  <td>{{$prop->quantidade}}</td>
                  <!-- <td>{{$prop->estado}}</td> -->
                  <td class="text-right">
                    <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a href="{{ url('') }}" class="dropdown-item" name="aluno">Editar</a>
                           
                          <a href="{{ route('produto.bloquear', $prop->id) }}" class="dropdown-item" class="dropdown-item" name="bloquearUser">Bloquear Produto</a>
                               

                            <a href="{{route('produto.destroy', $prop->id)}}" class="dropdown-item"
                                onclick="return confirm('Tens certeza que pretende eliminar?');">Eliminar</a>
                            
                        </div>
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

@push('js')
<script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }] 
            });
        });
</script>
@endpush