<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">
  <link rel="icon" type="image/svg" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">

        <title>  SAM - Sistema de Alarme Monitorado</title>
 
        <link rel="stylesheet" href="{{ url('assets/css/relatorio.css') }}">
    </head>
    <body> 
    <img src="{{ asset('assets') }}/img/Sam/3x/Ativo 2.png" alt="">
<h1>Relatorio de Urgencias</h1>
 
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
                        <td col="4">Por favor faça a pesquisa</td>
                        @endforelse
                      </tbody>
                    </table>
 
 
 
    </body>
</html>