@extends('layouts.app', [
    'namePage' => 'Maps',
    'class' => 'sidebar-mini',
    'activePage' => 'mapteste',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
    @include('alerts.personalizado.index')
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header ">
            Achando o Posto mais Proximo
          </div>
          <div class="card-body ">
              <div id="map-canvas" style="width: 100%; height: 500px;"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
           <!-- <canvas id="canvas"> -->
            <!-- <video width="100%" height="550" 
            src="http://192.168.21.139/" id="videoElement" autoplay>
            </video> -->
            <iframe width="100%" height="550"
            src="http://192.168.21.139/" id="videoElement" >
          </iframe>
            <!-- <video src=""></video> -->
            <!-- <video autoplay="true" id="videoElement" >
            </video> -->
          <!-- </canvas>   -->

          <!-- <div class="col-md-6">
            <button class="btn btn-primary" onclick="start()">Start</button>
            <button class="btn btn-primary" onclick="stop()">Stop</button>
          </div-->
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Detalhes do Carro
          </div>
          <div class="card-body">
            @foreach($carro as $carro)
          <h6>Matrícula</h6> <p>{{$carro->matricula}}</p>
          <h6>Modelo</h6><p>{{$carro->modelo}}</p>
          <h6>Marca</h6><p>{{$carro->marca}}</p>
          @endforeach
          </div>
          
        </div>
      </div>
      <div class="col-md-6">
      <!-- <form action="">
            <button class="btn btn-primary" >Descartar</button>
            <button class="btn btn-primary" >Marcar como encaminhado</button>

      </form> -->
        
      </div>
    </div>
  </div>
@endsection

@push('js')
    <!-- manter comentado mesmo quando descomentar os scripts abaixo<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    -->
    <script src="{{asset('assets')}}/js_maps/map.js"></script>
      <!-- <script type="text/javascript">
        var canvas = document.querySelector("canvas");
        var ctx = canvas.getContext('2d');
        var video = document.querySelector("#videoElement");
        video.addEventListener('play', function() {
            var $this = this; //cache
            (function loop() {
                if (!$this.paused && !$this.ended) {
                    ctx.drawImage($this, 0, 0);
                    setTimeout(loop, 1000 / 30); // drawing at 30fps
                }
            })();
        }, 0);
        if (navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(function(stream) {
                    video.srcObject = stream;
                })
                .catch(function(err0r) {
                    console.log("Something went wrong!");
                });
        }



        // Optional frames per second argument.

        // var stream = canvas;
        var recordedChunks = [];
        // mediaRecorder.start();

        function handleDataAvailable(event) {
            console.log("data-available");
            if (event.data.size > 0) {
                recordedChunks.push(event.data);
                console.log(recordedChunks);
                download();
            } else {
                // ...
            }
        }

        function download() {
            var blob = new Blob(recordedChunks, {
                type: "video/mp4"
            });
            var url = URL.createObjectURL(blob);
            var a = document.createElement("a");
            document.body.appendChild(a);
            a.style = "display: none";
            a.href = url;
            a.download = "{{Auth::user()->username}}";
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function start() {
            var stream = canvas.captureStream(30);
            console.log(stream);
            var options = {
                audioBitsPerSecond: 128000,
                videoBitsPerSecond: 2500000,
                mimeType: "video/webm; codecs=vp9"
            };
            mediaRecorder = new MediaRecorder(stream, options);

            mediaRecorder.ondataavailable = handleDataAvailable;
            mediaRecorder.start();
        }

        function stop() {
            console.log(1);
            mediaRecorder.stop();
        }

        // demo: to download after 9sec
        // setTimeout(event => {
        //   console.log("stopping");
        //   mediaRecorder.stop();
        // }, 9000);
       
    </script> -->

@endpush