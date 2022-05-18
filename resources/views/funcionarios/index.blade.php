@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Usuários',
    'activePage' => 'users',
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
              <a class="btn btn-primary btn-round text-white pull-right" href="{{route('funcionario.create')}}" title="Adicionar Funcionários">Adicionar</a>
            <h4 class="card-title">{{__("Funcionários")}}</h4>
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
                  <th>Username</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <!-- <th>Nível de Acesso</th> -->
                  <th>Estado</th>
                  <!-- <th>Date de Criação</th> -->
                  <th class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              <tfoot>
              <tbody>
              @foreach($users as $user)
                <tr>
                    <!-- <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="{{asset('assets')}}/img/default-avatar.png" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
                    </td> -->
                    <td>{{$user->username}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <!-- <td>{{$user->role}}</td> -->
                    <td>{{$user->estado}}</td>
                    <!-- <td>25/02/2020 10:14</td> -->
                    <td class="text-right">
                      <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <a href="{{ route('user.bloquear', $user->id) }}" class="dropdown-item" class="dropdown-item" name="bloquearUser">Bloquear Usuário</a>
                               

                            <a href="{{route('user.destroy', $user->id)}}" class="dropdown-item"
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