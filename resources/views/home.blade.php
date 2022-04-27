@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bgw0.jpg",
])

@section('content')
  <div class="panel-header " > 
    <img src="{{ asset('') }}" alt="">
  </div>
  <div class="content " style="background-color: grey;">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart no-border input-group">
          <div class="card-header ">
            <h5 class="card-category">Alcance Global</h5>
            <h4 class="card-title">Estado das Vendas dos dispositivos</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <!-- <canvas id="lineChartExample"></canvas> -->

              <!-- Chart's container -->
            <div id="chart" style="height: 290px;"></div>
            <!-- Charting library -->
            <script src="{{asset('assets')}}/js/echarts/echarts.min.js"></script>
            <!-- Chartisan -->
            <script src="{{asset('assets')}}/js/echarts/chartisan_echarts.js"></script>
            <!-- Your application script -->
            <script>

                const chart = new Chartisan({
                    el: '#chart',
                    url: "@chart('my_chart')",
                    hooks: new ChartisanHooks()
                    .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                        .datasets('bar')
                        .legend()
                        // .colors(['orange','grey'])
                        .tooltip()
                        .axis(true)
                });
            </script>

            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> 
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Adesão em 2022</h5>
            <h4 class="card-title">Todos os produtos</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="now-ui-icons loader_gear"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Ações</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item text-danger" href="#">Remover Dados</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="lineChartExample"></canvas>
          </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Atualizado
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-lg-6 col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category"> Estátisticas de requisições</h5>
            <h4 class="card-title">Últimas 24 horas</h4>
          </div>
          <div class="card-body">
            <div class="chart-area">

              <!-- <canvas id="lineChartExampleWithNumbersAndGrid"></canvas> -->
              <!-- <canvas id="barChartSimpleGradientsNumbers"></canvas> -->
               <!-- Chart's container -->
               <div id="chart_urgency" style="height: 280px;"></div>
                <!-- Charting library -->
                <!-- Your application script -->
                <script>
                    const chart2 = new Chartisan({
                        el: '#chart_urgency',
                        url: "@chart('urgency_chart')",
                        hooks: new ChartisanHooks()
                        .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                            .datasets('pie')
                            .legend()
                            // .tooltip()
                            .axis(false)
                    });
                </script>
            </div>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-12">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Backend development</h5>
            <h4 class="card-title">Tasks</h4>
          </div>
          <div class="card-body ">
            <div class="table-full-width table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" checked>
                          <span class="form-check-sign"></span>
                        </label>
                      </div>
                    </td>
                    <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                      </button>
                      <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
@endsection

@push('js')
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script> -->
@endpush