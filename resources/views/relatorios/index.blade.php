@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'relatorio',
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
                <form method="GET" action="{{route('relatorio.gerar')}}">
                  <div class="row d-flex justify-content-end">
                  <div class="col-md-2"></div>

                    <div class="col-md-7 ml-auto mr-auto ">
                      <label class="form-label" for="select">
                        Tipo relatório:
                      </label>
                      <!-- <div class="input-group border-0">
                        <input type="date" name="data_start" value="" class="form-control" required>
                      </div> -->
                      <select class="form-select mt-1 form-control" id="select" name="tipo">
                        <option value="1">Diário</option>
                        <option value="2">Semanal</option>
                        <option value="2">Mensal</option>
                        <option value="3">Anual</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-round btn-primary form-control " title="Pesquisar"> <i class="now-ui-icons ui-1_zoom-bold"></i></button>
                        <button class="btn btn-round btn-primary form-control"> Gerar PDF</button>
                    </div> 
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
                          Estado
                        </th>
                        <!-- <th class="text-center">
                          Ações
                        </th> -->
                      </thead>
                      <tbody>
                        @forelse($urgencies as $urgency)
                        <tr>
                          <td>
                          {{$urgency->name}}
                          </td>
                          <td>
                          {{$urgency->created_at}}
                          </td>
                          <td class="text-center">
                          {{$urgency->estado}}
                          </td>
                          <!-- <td class="text-left">
                              
                            <a class="btn btn-primary form-control" href="{{route('relatorio.pdf')}}">Imprimir</a>

                          </td> -->
                        </tr>
                        @empty
                        <td col="4">Por favor faça a pesquisa</td>
                        @endforelse
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