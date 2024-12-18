@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'table',
  ])

@section('content')
<div class="panel-header">
    <div class="header text-center">
      <h2 class="title">Relatório</h2>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="places-buttons">
                <form>
                  <div class="row d-flex justify-content-end">
                    <div class="col-md-6 ml-auto mr-auto">
                      <!-- <h4 class="card-title">
                      Resultado da Pesquisa
                        <p class="category">Clique para ver os detalhes</p>
                      </h4> -->
                      <div class="input-group border-0">
                        <input type="date" name="data_start" value="" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 ml-auto mr-auto text-left">
                      <div class="input-group border-0">
                        <input type="date" value="" class="form-control">
                      </div>
                    </div> 
                    <div class="col-md-2 ">
                        <button type="submit" class="mt-1 btn btn-round btn-primary form-control " title="Pesquisar"> <i class="now-ui-icons ui-1_zoom-bold"></i></button>
                    </div> 
                  </div> 
                </form>
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
                              
                            <a class="btn btn-primary form-control" href="{{route('relatorio.pdf')}}">Imprimir</a>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
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