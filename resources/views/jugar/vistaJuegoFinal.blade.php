@extends('plantilla')
@section('titulo')
    Lobtuf grid
@endsection
@section('contenido')
<div class="container text-center">
  <h1 class="futbol11-title">LOBTUF GRID</h1>
  <h4 id="score" class="text-info">Puntuación</h4>
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
        <td id="celda-0-0">{{($tablero[0][0])=='X'?'X':'-'}}</td>
        <td id="celda-0-1">{{($tablero[0][1])=='X'?'X':'-'}}</td>
        <td id="celda-0-2">{{($tablero[0][2])=='X'?'X':'-'}}</td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[1]->escudo) }}" class="team-logo" alt="{{$equipos[1]->nombre}}"><br>{{$equipos[1]->nombre}}</th>
        <td id="celda-1-0">{{($tablero[1][0])=='X'?'X':'-'}}</td>
        <td id="celda-1-1">{{($tablero[1][1])=='X'?'X':'-'}}</td>
        <td id="celda-1-2">{{($tablero[1][2])=='X'?'X':'-'}}</td>
      </tr>
      <tr>
        <th><img src="{{ asset('img/escudos/'.$equipos[2]->escudo) }}" class="team-logo" alt="{{$equipos[2]->nombre}}"><br>{{$equipos[2]->nombre}}</th>
        <td id="celda-2-0">{{($tablero[2][0])=='X'?'X':'-'}}</td>
        <td id="celda-2-1">{{($tablero[2][1])=='X'?'X':'-'}}</td>
        <td id="celda-2-2">{{($tablero[2][2])=='X'?'X':'-'}}</td>
      </tr>
    </tbody>
  </table>
  <div id="zona-controles" class="d-flex justify-content-center mt-3 gap-4">
    <input type="text" id='nombre_jugador' list="jugadores" class="form-control w-50" placeholder="Escribe el jugador aquí">
    <input type="hidden" name="id_jugador" id="id_jugador">
    <datalist id="jugadores">
      @foreach ($jugadores as $item)
          <option value="{{$item->nombre}}" data-id="{{$item->id}}">
      @endforeach
    </datalist>
    <button type="button" name="probar" class="btn btn-warning" onclick="comprobar()">Probar</button>
    <button type="button" name="acabar" class="btn btn-dark fin" onclick="acabar()"><img src=" {{ asset('img/jugar/finalizar.png')}}" alt="Finalizar juego" class="fin"></button>
  </div>
  <div id="mensaje" class="mt-3 fw-bold text-danger"></div>
</div>
<script>
  let puntuacion = {{$p->puntos}};
  // =========================
  // AUTOCOMPLETAR ID JUGADOR
  // =========================
  const input = document.getElementById('nombre_jugador');
  const hidden = document.getElementById('id_jugador');
  const dl = document.querySelectorAll('#jugadores option');
  
  input.addEventListener('input',()=>{
    const valor = input.value;
    hidden.value = '';
  
    dl.forEach(element => {
      if(element.value == valor){
        hidden.value = element.dataset.id;
      }
    });
  });
  
  
  // =========================
  // COMPROBAR JUGADOR
  // =========================
  function comprobar(){
    const t = @json($tablero);
    console.log(t);
    const jugador = document.getElementById('id_jugador').value;
    const mensaje = document.getElementById('mensaje');
  
    let acierto = false;
  
    if(!jugador){
      mensaje.innerText = "Introduce un jugador válido";
      return;
    }
  
    for(let i=0;i<3;i++){
      for(let j=0;j<3;j++){
  
        if(t[i][j] != 'X'){
          let celda = document.getElementById(`celda-${i}-${j}`);
  
          // ⛔ no modificar si está bloqueada
          if(!celda.classList.contains("bloqueada")){
  
            let encontrado = t[i][j].find(ju => ju.id == jugador);
  
            if(encontrado){
              celda.innerHTML = `
                <img src="img/jugadorEquipo/${encontrado.foto}" 
                style="width:70px; height:70px; object-fit:cover;">`;
  
              celda.classList.add("bloqueada");
              
              acierto = true;
            }
          }
        }
      }
    }
   if (acierto) {
      puntuacion+=10;
    }else{
      puntuacion-=5;
    }

    actualizarScore();
    // LIMPIAR INPUT
    input.value = '';
    hidden.value = '';
  
    // MENSAJE ERROR
    if(!acierto){
      mensaje.innerText = "Ese jugador no encaja en ninguna casilla";
    } else {
      mensaje.innerText = "";
    }
  
    // COMPROBAR SI TERMINA SOLO
    if(comprobarFin()){
      finjuego();
    }
  }
  
  
  // =========================
  // COMPROBAR FIN DEL JUEGO
  // =========================
  function comprobarFin(){
  const t = @json($tablero);

  for(let i=0;i<3;i++){
    for(let j=0;j<3;j++){

      // SOLO casillas jugables
      if(t[i][j] != 'X'){

        let celda = document.getElementById(`celda-${i}-${j}`);

        // Si alguna NO está bloqueada → no ha terminado
        if(!celda.classList.contains("bloqueada")){
          return false;
        }
      }
    }
  }

  return true;
}

  // =========================
  // FINALIZAR JUEGO
  // =========================
  function acabar(){
    const t = @json($tablero);
    // RELLENAR CASILLAS VACÍAS
    for(let i=0;i<3;i++){
      for(let j=0;j<3;j++){
        if(t[i][j] != 'X'){
          let celda = document.getElementById(`celda-${i}-${j}`);
  
          // ⛔ no modificar si está bloqueada
          if(!celda.classList.contains("bloqueada")){
  
            let encontrado = t[i][j][0];
  
            if(encontrado){
              celda.innerHTML = `
                <img src="img/jugadorEquipo/${encontrado.foto}" 
                style="width:70px; height:70px; object-fit:cover;">`;
  
              celda.classList.add("bloqueada");
            }
          }
        }
      }
    }
    finjuego();
  }
  function finjuego(){
  //Llamar a la ruta que marca la partida finalizada y actualiza el tiempo  
  fetch("{{ route('finTiempo') }}", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": "{{ csrf_token() }}"
    },
    body: JSON.stringify({
      id: {{$p->id}}
    })
  })
  .then(res => res.json())
  .then(data => {
    console.log(data)
  })
  .catch(error => {
    console.error("Error:", error)
  });


  const zona = document.getElementById('zona-controles');
  zona.classList.add("d-none");
  console.log("FIN JUEGO", zona); // debug
  const mensajeFinal = document.getElementById('mensaje');
  mensajeFinal.classList.remove("text-danger");
  mensajeFinal.classList.add("text-success");
  mensajeFinal.innerHTML = "¡¡Has acabado!!";

}
function actualizarScore(){
  //Llamar a la ruta que marca la partida finalizada y actualiza el tiempo  
  fetch("{{ route('puntos') }}", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": "{{ csrf_token() }}"
    },
    body: JSON.stringify({
      id: {{$p->id}},
      puntos:puntuacion
    })
  })
  .then(res => res.json())
  .then(data => {
    console.log(data)
  })
  .catch(error => {
    console.error("Error:", error)
  });
  document.getElementById("score").innerText = "Puntuación: " + puntuacion;
}
  </script>
@endsection