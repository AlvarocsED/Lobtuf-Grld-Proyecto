@extends('plantilla')
@section('titulo')
    Juego
@endsection
@section('contenido')
<div class="container text-center">
  <h1 class="futbol11-title">LOBTUF GRID</h1>

  <table class="table grid-container table-dark table-bordered align-center">
    <thead class="grid-header">
      <tr>
        <th><img src="{{ asset('img/jugar/logo-tabla.png')}}" alt="Logo"  class="logo-app"></th>
        <th><img src="{{ asset('img/banderas/'.$banderas[0]->bandera) }}" class="flag" alt="{{$banderas[0]->pais}}"><br>{{$banderas[0]->pais}}</th>
        <th><img src="{{ asset('img/banderas/'.$banderas[1]->bandera) }}" class="flag" alt="{{$banderas[1]->pais }} "><br>{{$banderas[1]->pais }}</th>
        <th><img src="{{ asset('img/banderas/'.$banderas[2]->bandera) }}" class="flag" alt="{{$banderas[2]->pais}}"><br>{{$banderas[2]->pais}}</br></th>
      .</tr>
    </thead>
    <tbody>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[0]->escudo) }}" class="team-logo" alt ="{{$equipos[0]->nombre}}"><br>{{$equipos[0]->nombre}}</th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[1]->escudo) }}" class="team-logo" alt="{{$equipos[1]->nombre}}"><br>{{$equipos[1]->nombre}}</th>
        <td></td><td></td><td></td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[2]->escudo) }}" class="team-logo" alt="{{$equipos[2]->nombre}}"><br>{{$equipos[2]->nombre}}</th>
        <td></td><td></td><td></td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-center mt-3 gap-4">
    <input type="text" list="jugadores" class="form-control w-50" placeholder="Escribe el jugador aquí">
    <datalist id="jugadores">
      @foreach ($jugadores as $item)
          <option>{{$item->nombre}}</option>
      @endforeach
    </datalist>
    <button type="button" class="btn btn-warning">Probar</button>
    <button type="button" class="btn btn-dark fin"><img src=" {{ asset('img/jugar/finalizar.png')}}" alt="Finalizar juego" class="fin"></button>
  </div>
</div>
@endsection