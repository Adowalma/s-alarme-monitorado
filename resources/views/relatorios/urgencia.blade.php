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
						<i class="now-ui-icons loader_gear"></i>Acções
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Export CSV</a>
                <a class="dropdown-item" href="#">Export Excel</a>
                <a class="dropdown-item" href="#">Export PDF</a>
                <a class="dropdown-item" href="#">Print</a>
            </div>
          </div>
					<h2 class="card-title"> {{__("Relatório de Urgências")}}</h2>

          
        </div>
          <div class="card-body">
            <div class="toolbar">
                 <!-- Here you can write extra buttons/actions for the toolbark            -->
            </div>
            <table class="table table-striped text-center" id="quiztable">
                        <thead >
                            <th style="width:5%">N.º</th>
                            <th>
                                Nome
                            </th>
                            <th>
                                Endereço
                            </th>
                            <th>
                                Data
                            </th>
                            <th>
                                Estado
                            </th>
                           
                        </thead>
                        <tbody>
                            @foreach ($products as $row)
                                <trS>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>
                                        {{ $row->name}}
                                    </td>
                                    <td>
                                        {{ $row->endereco }}
                                    </td>                                    
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <span class="badge badge-{{ ($row->estado =='Encaminhado') ? 'success' : (($row->estado == 'Descartado') ? 'info' : 'warning')}}">{{ $row->estado }}</span>
                                        
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
            }], 

            "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }

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