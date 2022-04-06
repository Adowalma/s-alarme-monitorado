<div class="sidebar" data-color="grey" style="backdrop-filter: blur(8px);">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-mini">
      <div class="logo-container">
        <img src="{{ asset('assets/img/Sam/3x/Ativo 2.svg') }}" alt="">
      </div>
    </a>
    <!-- <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('SAM') }}
    </a> -->
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
   
   <ul class="nav">
   @can('isAdmin') 
      <li>
        
        <a data-toggle="collapse" href="#laravelExamples">
          <!-- <i class="fab fa-laravel"></i> -->
            <i class="now-ui-icons users_single-02"></i> 

        <p>
          {{ __("Usuários") }}
          <b class="caret"></b>
        </p>
        </a>
        <div class="collapse " id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Listar Usuários") }} </p>
              </a>
            </li>

            
          <ul class="nav">
            <li class="@if ($activePage == 'funcionarios') active @endif">
              <a href="{{ route('funcionario.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Listar Funcionários") }} </p>
              </a>
            </li>

            
            <li class="@if ($activePage == 'postos') active @endif">
              <a href="{{ url('posto/listar') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Listar Postos") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'postos create') active @endif">
              <a href="{{ url('posto/create') }}">
                <i class="now-ui-icons business_bank"></i>
                <p> {{ __("Cadastrar Postos") }} </p>
              </a>
            </li> 
          </ul>
      
        </div>
      </li>

      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('ver-mapa.ver') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Mapas') }}</p>
        </a>
      </li>
      @endcan
      <li>
        
        <a data-toggle="collapse" href="#prodCollapse">
          <!-- <i class="fab fa-laravel"></i> -->
            <i class="now-ui-icons users_single-02"></i> 

        <p>
          {{ __("Produtos") }}
          <b class="caret"></b>
        </p>
        </a>
        <div class="collapse " id="prodCollapse">
          <ul class="nav">
            <li class="@if ($activePage == 'produtos') active @endif">
              <a href="{{ url('produto/listar') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("Listar Produtos") }} </p>
              </a>
            </li>
            <!-- <li class="@if ($activePage == 'produtos_create') active @endif">
              <a href="{{ url('produto/create') }}">
                <i class="now-ui-icons business_bank"></i>
                <p> {{ __("Cadastrar Produtos") }} </p>
              </a>
            </li>  -->
          </ul>
      
        </div>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notificações') }} <span class="badge badge-pill badge-danger">4</span></p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons files_single-copy-04"></i>
          <p>{{ __('Relatórios') }}</p>
        </a>
      </li>
    </ul>
    
  </div>
</div>
