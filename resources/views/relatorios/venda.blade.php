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
    .pull-left ul {
        list-style: none;
        margin: 0;
        padding-left: 0;
    }
    .pull-left a {
        text-decoration: none;
        color: #ffffff;
    }
    .pull-left li {
        color: #ffffff;
        background-color: #2f2f2f;
        border-color: #2f2f2f;
        display: block;
        float: left;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
        padding: 12px 30px;
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.428571;
    }
    .pull-left li:hover {
        cursor: pointer;
    }
    .pull-left ul li ul {
        visibility: hidden;
        opacity: 0;
        min-width: 9.2rem;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 8px;
        left: 0;
        display: none;
    }
    .pull-left ul li:hover>ul,
    .pull-left ul li ul:hover {
        visibility: visible;
        opacity: 1;
        display: block;
    }
    .pull-left ul li ul li {
        clear: both;
        width: 100%;
        color: #ffffff;
    }
    .ul-dropdown {
        margin: 0.3125rem 1px !important;
        outline: 0;
    }
    .firstli {
        border-radius: 0.2rem;
    }
    .firstli .material-icons {
        position: relative;
        display: inline-block;
        top: 0;
        margin-top: -1.1em;
        margin-bottom: -1em;
        font-size: 0.8rem;
        vertical-align: middle;
        margin-right: 5px;
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
            <div class="pull-left">
                <h2 class="card-title"> {{__("Relatório de Venda")}}</h2>
            </div>
          
            <div class="pull-right">
              <div class="pull-left">
                <nav role="navigation">
                    <ul class="ul-dropdown">
                      <li class="firstli">
                          <i
                            class="now-ui-icons loader_gear"></i><a href="#">ACTION</a>
                          <ul>
                            <li><a href="#">Export CSV</a></li>
                            <li><a href="#">Export Excel</a></li>
                            <li><a href="#">Export PDF</a></li>
                            <li><a href="#">Print</a></li>
                          </ul>
                      </li>
                    </ul>
                </nav>
              </div>
            </div>
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
                            <!-- <th class="text-right not-export-col">
                            </th> -->
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
                                    <!-- <td class="text-right action_buttons">
                                        <a class="btn-icon btn-darken " href="question/create/{{ $row->id }}" title="Add Question">
                                            <i class="material-icons">question_answer</i>
                                        </a>
                                        <a class="btn-icon btn-darken " href="{{ url('quiz.show', $row->id) }}" title="View Quiz Report">
                                            <i class="material-icons">insert_chart</i>
                                        </a>
                                        <a class="btn-icon btn-darken " href="{{ url('quiz.edit', $row->id) }}" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a class="deletebtn btn-icon btn-darken " data-action="{{ url('quiz.destroy', $row->id) }}"
                                            href="#" title="Delete">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td> -->
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
        $("ul li ul li").click(function() {
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