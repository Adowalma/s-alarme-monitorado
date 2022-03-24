@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'table',
  ])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="places-buttons">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto text-center">
                    <h4 class="card-title">
                    Resultado da Pesquisa
                      <p class="category">Clique para ver os detalhes</p>
                    </h4>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-lg-10 ml-auto mr-auto">

                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Proprietário
                        </th>
                        <th>
                          Data - Hora
                        </th>
                        <th>
                          Total de alarmes
                        </th>
                        <th class="text-center">
                          Ações
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          Dakota Rice 
                          </td>
                          <td>
                            16 Mar 08:57
                          </td>
                          <td class="text-center">
                            3
                          </td>
                          <td class="text-left">
                            <div class="row">
                              
                              <div class="col-md-6">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">
                                  Ver detalhes
                                </button>

                                @include('modals.detalhes')

                              </div>

                              <div class="col-md-6">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Imprimir</button>
                              </div>

                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                    <div class="col-4">
                      <button class="btn btn-primary btn-block">Listar tudo</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection