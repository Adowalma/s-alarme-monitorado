@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'relatorio',
  ])

  @push('css')
  <style>
    .dt-buttons {
    display: none;
    }
  </style>
  @endpush

@section('content')
<div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
						<div class="dropdown  pull-right">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
						<i class="now-ui-icons loader_gear"></i>ACTION
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Export CSV</a>
                <a class="dropdown-item" href="#">Export Excel</a>
                <a class="dropdown-item" href="#">Export PDF</a>
                <a class="dropdown-item" href="#">Print</a>
            </div>
          </div>
					<h2 class="card-title"> {{__("Relatório de Venda")}}</h2>

          
        </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table class="table table-striped text-center" id="quiztable">
                        <thead >
                            <th style="width:5%">No.</th>
                            <th>
                                Produto
                            </th>
                            <th>
                                Comprador
                            </th>
                            <th>
                                Endereço
                            </th>
                            <th>
                                Preço
                            </th>
                            <th>
                                Quantidade
                            </th>
                            <th>
                                Total Pago
                            </th>
                            <th>
                                Updated at
                            </th>
                            <th>
                                Status
                            </th>
                           
                        </thead>
                        <tbody>
                            @foreach ($products as $row)
                                <trS>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $row->tipo }}
                                    </td>
                                    <td>
                                        {{ $row->name}}
                                    </td>
                                    <td>
                                        {{ $row->endereco }}
                                    </td>
                                    <td>
                                        {{ $row->preco }}kz
                                    </td>
                                    <td>
                                        {{ $row->quantity }}
                                    </td>
                                    <td>{{$row->quantity*$row->preco}}kz</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td>
                                        <span class="badge badge-{{ ($row->estado =='Pago') ? 'success' : (($row->estado == 'Por aprovar') ? 'info' : 'warning')}}">{{ $row->estado }}</span>
                                        
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
        $('#quiztable').DataTable({
            dom: "Blfrtip",
            buttons: [
                {
                    text: 'csv',
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }
                },
                {
                    text: 'excel',
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }
                },
                {
                    text: 'pdf',
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }
                },
                {
                    text: 'print',
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible:not(.not-export-col)'
                    }
                },
                
            ],
            columnDefs: [{
                orderable: false,
                targets: -1
            }] 
        });
        $("div a").click(function() {
          var i = $(this).index() + 1
          var table = $('#quiztable').DataTable();
          if (i == 1) {
              table.button('.buttons-csv').trigger();
          } else if (i == 2) {
              table.button('.buttons-excel').trigger();
          } else if (i == 3) {
              table.button('.buttons-pdf').trigger();
          } else if (i == 4) {
              table.button('.buttons-print').trigger();
          } 
      });
    });
  </script>
@endpush