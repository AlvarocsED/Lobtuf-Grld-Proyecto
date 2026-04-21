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
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[0]->escudo) }}" class="team-logo" alt ="{{$equipos[0]->nombre}}"><br>{{$equipos[0]->nombre}}</th>
        <td>{{($tablero[0][0])=='X'?'X':'-'}}</td>
        <td>{{($tablero[0][1])=='X'?'X':'-'}}</td>
        <td>{{($tablero[0][2])=='X'?'X':'-'}}</td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[1]->escudo) }}" class="team-logo" alt="{{$equipos[1]->nombre}}"><br>{{$equipos[1]->nombre}}</th>
        <td>{{($tablero[1][0])=='X'?'X':'-'}}</td>
        <td>{{($tablero[1][1])=='X'?'X':'-'}}</td>
        <td>{{($tablero[1][2])=='X'?'X':'-'}}</td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[2]->escudo) }}" class="team-logo" alt="{{$equipos[2]->nombre}}"><br>{{$equipos[2]->nombre}}</th>
        <td>{{($tablero[2][0])=='X'?'X':'-'}}</td>
        <td>{{($tablero[2][1])=='X'?'X':'-'}}</td>
        <td>{{($tablero[2][2])=='X'?'X':'-'}}</td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-center mt-3 gap-4">
    <input type="text" id='nombre_jugador' list="jugadores" class="form-control w-50" placeholder="Escribe el jugador aquí">
    <input type="hidden" name="id_jugador" id="id_jugador">
    <datalist id="jugadores">
      @foreach ($jugadores as $item)
          <option value="{{$item->nombre}}" data-id="{{$item->id}}">
      @endforeach
    </datalist>
    <button type="button" name="probar" class="btn btn-warning" onclick="comprobar()">Probar</button>
    <button type="button" name="acabar" class="btn btn-dark fin"><img src=" {{ asset('img/jugar/finalizar.png')}}" alt="Finalizar juego" class="fin"></button>
  </div>
</div>
<script>
  //Rellenar el campo del id del jugador escrito en datalist
  const input = document.getElementById('nombre_jugador');
  const hidden = document.getElementById('id_jugador');
  const dl = document.querySelectorAll('#jugadores option')
  input.addEventListener('input',()=>{
    const valor = input.value;
     hidden.value = '';
    dl.forEach(element => {
      if(element.value == valor){
        hidden.value = element.dataset.id;
      }
    });
  });
  function comprobar(){
    const t = @json($tablero);
    //console.log(t)
    
    const jugador = document.getElementById('id_jugador').value;
    for(i=0;i<3;i++){
      for(j=0;j<3;j++){
        
      }
    }
  }
</script>
@endsection