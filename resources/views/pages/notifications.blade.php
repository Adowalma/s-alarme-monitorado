@extends('layouts.app', [
  'namePage' => 'Notifications',
  'class' => 'sidebar-mini',
  'activePage' => 'notifications',
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
    @include('alerts.personalizado.index')            
      <!-- <img src="{{ asset('assets/img/banner-header.jpg') }}" alt=""> -->
      <h2 class="title">Notificações</h2>
    </div>
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
                   <!-- Gestão de Alarmes -->
                    <p class="category">Clique para ver os alarmes</p>
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
                      <!-- <th>
                        Data - Hora
                      </th> -->
                      <th >
                        Ações
                      </th>
                    </thead>
                    <tbody>
                      @forelse($dados as $dado)
                      <tr>
                        
                        <td>
                       {{$dado->name}}
                        </td>
                        <!-- <td>
                          16 Mar 08:57
                        </td> -->
                        <td class="text-left">
                          <div class="row">
                            <!-- <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                            </div> -->
                            <div class="">
                              <!-- <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Ver detalhes</button> -->
                              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">
                                Ver detalhes
                              </button> -->
                              <a href="{{ route('mapa.teste') }}" class="btn btn-primary">Ver detalhes</a>
                              

                            </div>
                            <!-- <div class="col-md-4">
                              <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
                            </div> -->
                          </div>
                        </td>
                      </tr>
                      @empty
                      <h5 class='text-center text-danger'>Sem urgencias</h5>
                      @endforelse
                    </tbody>
                  </table>
                </div>

                  <!-- <div class="row">
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Bottom Center</button>
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notifications Style</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <span>This is a plain notification</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>This is a notification with close button.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notification states</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-primary">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Info - </b> This is a regular notification made with ".alert-info"</span>
            </div>
            <div class="alert alert-success">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Success - </b> This is a regular notification made with ".alert-success"</span>
            </div>
            <div class="alert alert-warning">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
            </div>
            <div class="alert alert-danger">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
            </div>
          </div>
        </div>
      </div> -->
      
    </div>
  </div>
@endsection