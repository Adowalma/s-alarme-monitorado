<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">
  <link rel="icon" type="image/svg" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>  SAM - Sistema de Alarme Monitorado</title>
 
        <style>
         
        </style>
    </head>
    <body> 
      <div class="row justify-content-md-center">
        <div class="col">
          <img src="" alt="">
        </div>
        <div class="col">
        <h3 class="">Relatorio de Urgencias</h3>
        </div>
      </div>
 
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
                        </tr>
                        @empty
                        <td>Sem registro</td>
                        @endforelse
                      </tbody>
                    </table>
 
 
 
    </body>
</html>