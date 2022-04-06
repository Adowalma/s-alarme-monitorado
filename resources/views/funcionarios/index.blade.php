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
                                             <a type="button" href="#" rel="tooltip" class="btn btn-primary btn-icon btn-sm " data-original-title="" title="">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </a>
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