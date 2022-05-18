@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Produtos',
    'activePage' => 'aprovar_venda',
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
              <h4 class="card-title">{{__("Aprovar Venda")}}</h4>
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
                  <th>Image</th>
                  <th>Nome</th>
                  <th>Comprador</th>
                  <th>Endereço de entrega</th>
                  <th>Preco</th>
                  <th>Quantidade</th>
                  <th>Total</th>
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
                  <td>{{$prop->name}}</td>
                  <td>{{$prop->endereco}}</td>
                  <td>{{$prop->preco}}kz</td>
                  <!-- <td>@if ($prop->user_id==null) Sem Propietário @else {{$prop->name}} @endif</td> -->
                  
                  <td>{{$prop->quantity}}</td>
                  <td>{{$prop->quantity*$prop->preco}}kz</td>
                  <td class="text-right">
                    <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a href="{{ route('checkout.end', $prop->id) }}" class="dropdown-item" name="aluno">Mover para Pagos</a>
                                                          

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