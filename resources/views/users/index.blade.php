@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Lista de Usuarios',
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
              <!-- <a class="btn btn-primary btn-round text-white pull-right" href="#">Add user</a> -->
            <h4 class="card-title">{{__("Usuários")}}</h4>
            <div class="col-12 mt-2">
                                        </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Nível de Acesso</th>
                  <th>Telemóvel</th>
                  <!-- <th>Date de Criação</th> -->
                  <th class="disabled-sorting text-right">Acções</th>
                </tr>
              </thead>
              <tfoot>
              <tbody>
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
    <script >
    $(function () {
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('user.index') }}",
          columns: [
              // {data: 'id', name: 'id'},
              {data: 'username', name: 'username'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'role', name: 'role'},
              {data: 'telemovel', name: 'telemovel'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
  </script>
  @endpush