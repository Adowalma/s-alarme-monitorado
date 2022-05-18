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
          <!-- <video controls width="100%" height="550">
            <source src="http://192.168.43.106/" type="video/mp4"></source>
          </video> -->


           <iframe width="100%" height="550"
            src="http://192.168.43.106/" controls>
          </iframe>

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
    </div>
  </div>
@endsection

@push('js')
    <!-- manter comentado mesmo quando descomentar os scripts abaixo<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
    <script src="{{asset('assets')}}/js_maps/map.js"></script>
    <script>
      const start=async()=>{
        const stream=await navigator.mediaDevices.getDisplayMedia(
          {
            video:{
              mediaSource:"screen"
            }
          }
        )
        const data=[];
        const mediaRecorder=new MediaRecorder(stream);
        mediaRecorder.ondataavailable=(e)=>{
          data.push(e.data);
        }
        mediaRecorder.start();
        mediaRecorder.onstop=(e)=>{
          document.querySelector("video").src=URL.createObjectURL(
            new Blob(data,{
              type:data[0].type,
            })
          )
        }
      }
      
      start();
    </script>
@endpush