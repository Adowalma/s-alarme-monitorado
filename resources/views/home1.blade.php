@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page  sidebar-mini ',
    'activePage' => 'home',
])

@section('content')
<div class=" panel-header" >
    <!-- <div class="container"> -->
        <div class="row  mr-3 ml-2">
            <div class="col-md-3 shadow-sm mx-auto card animate__animated animate__fadeIn"
                style="border-bottom:3px solid #ff6633">
							<h5 class="___class_+?39___">Encaminhadas</h5>
						<div>
									
								<div class="row">
										<div class="col-md-6">
												<h4>Total </h4>
										</div>
										<div class="col-md-6 ">
												<h4 class="text-center">{{ $encaminhado }}</h4>
										</div>
								</div>
							</div>
            </div>

            <div class="col-md-3 shadow-sm mx-auto card animate__animated animate__fadeIn"
                style="border-bottom:3px solid #4d8066">

                <div class="p-1">

                    <h5 class="___class_+?39___">Descartadas</h5>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Total </h4>
                                </div>
                                <div class="col-md-6 ">
                                    <h4 class="text-center">{{ $descartado }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3 shadow-sm mx-auto card animate__animated animate__fadeIn"
                style="border-bottom:3px solid #0f7999">

                <div class="p-1">

                    <h5 class="___class_+?39___">Pendentes</h5>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Total </h4>
                                </div>
                                <div class="col-md-6 ">
                                    <h4 class="text-center">{{ $pendente }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 shadow-sm  card animate__animated animate__fadeIn"
                style="border-bottom:3px solid #991AFF">

                <div class="p-1">

                    <h5 class="___class_+?23___">Em Análise</h5>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Total </h4>
                                </div>
                                <div class="col-md-6 ">
                                    <h4 class="text-center">{{ $em_execucao }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!-- </div> -->
    </div>
</div>
  
  <div class="content col-md-12" > 
    
    
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <canvas id="chart1" width="5" height="5"></canvas>

            </div>
            <div class="col-md-6">
                <canvas id="chart2" width="5" height="5"></canvas>

            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>


    <script>
        var ctx = document.getElementById('chart1');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Encaminhadas', 'Descartadas','Pendente', 'Em análise' ],
                datasets: [{
                    label: 'Estado das Urgências',
                    data: [{{$encaminhado}},{{$descartado}},{{$pendente}}, {{$em_execucao}}, 
                    ],
                    backgroundColor: [
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        // 'rgba(255, 206, 86, 0.8)',
                        'rgba(255, 99, 132, 0.5)',
                        
                    ],
                    borderColor: [
                        'rgba(255, 159, 64, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


<script>
    var ctx = document.getElementById('chart2');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Encaminhadas', 'Descartadas','Pendente', 'Em execução', ],
            datasets: [{
                label: 'Estados das Urgências',
                data: [{{$encaminhado }}, {{$descartado}},{{$pendente}}, {{ $em_execucao}}, 
                ],
                backgroundColor: [
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                        // 'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 99, 132, 0.5)',
                        
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)',
                       
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
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