@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Postos',
    'activePage' => 'postos',
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
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Date de Criação</th>
                  <th class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              <tfoot>
              <tbody>
                                  <tr>
                    <td>Admin</td>
                    <td>admin@nowui.com</td>
                    <td>25/02/2020 10:14</td>
                      <td class="text-right">
                        <!-- <a type="button" href="#" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                          <i class="now-ui-icons ui-2_settings-90"></i>
                        </a> -->
                        <div class="dropdown">
                        
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="fa fa-clone" aria-hidden="true"></i> -->
                                <i class="now-ui-icons ui-2_settings-90" aria-hidden="true"></i>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="">Editar</a>

                              <a class="dropdown-item" href=" "
                                  onclick="return confirm('Quer mesmo eliminar este Posto?')">Eliminar</a>
                            </button>

                        </div>
                      </td>
                  </tr>
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