@extends('plantilla')
@section('titulo')
    Juego
@endsection
@section('contenido')
<div class="container text-center">
  <h1 class="futbol11-title">FUTBOL11 GRID</h1>

  <table class="table grid-container table-dark table-bordered align-center">
    <thead class="grid-header">
      <tr>
        <th>FUTBOL11 GRID</th>
        <th><img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Juventus_FC_2017_logo.svg" class="team-logo" alt="Juventus"><br>JUVENTUS</th>
        <th><img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Ukraine.svg" class="flag" alt="Ucrania"><br>UKRAINE</th>
        <th><img src="https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg" class="flag" alt="Alemania"><br>GERMANY</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><img src="https://upload.wikimedia.org/wikipedia/en/e/eb/Manchester_City_FC_badge.svg" class="team-logo" alt="Man City"><br>MAN CITY</th>
        <td></td><td></td><td></td>
      </tr>
      <tr>
        <th><img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Logo_of_AC_Milan.svg" class="team-logo" alt="AC Milan"><br>AC MILAN</th>
        <td></td><td></td><td></td>
      </tr>
      <tr>
        <th><img src="https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg" class="team-logo" alt="Chelsea"><br>CHELSEA</th>
        <td></td><td></td><td></td>
      </tr>
    </tbody>
  </table>

  <input type="text" class="form-control w-50 mx-auto mt-3" placeholder="Type the footballer here">
</div>
@endsection