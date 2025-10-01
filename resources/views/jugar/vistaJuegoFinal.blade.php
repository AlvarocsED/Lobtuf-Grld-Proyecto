@extends('plantilla')
@section('titulo')
    Juego
@endsection
@section('contenido')
<div class="border-bottom border-imfo border-bottom-2">
  <h1 class="fw-bold">LOBTUF GRID</h1>
</div>
  <table class="grid-table mt-4">
    <tr>
      <th></th>
      <th><img src=//bandera1 class="flag-icon" alt="//nombreBamdera1"><br><small>FRANCE</small></th>
      <th><img src="https://flagcdn.com/ch.svg" class="flag-icon" alt="Switzerland"><br><small>SWITZERLAND</small></th>
      <th><img src="https://flagcdn.com/ng.svg" class="flag-icon" alt="Nigeria"><br><small>NIGERIA</small></th>
    </tr>
    <tr>
      <th><img src="https://upload.wikimedia.org/wikipedia/en/0/0c/Liverpool_FC.svg" alt="Liverpool" style="height:40px;"><br><small>LIVERPOOL</small></th>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Sadio_Mané_2018.jpg" alt="Sadio Mané"></td>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Xherdan_Shaqiri_2018.jpg" alt="Shaqiri"></td>
      <td></td>
    </tr>
    <tr>
      <th><img src="https://upload.wikimedia.org/wikipedia/en/0/0b/Inter_Milan.svg" alt="Inter" style="height:40px;"><br><small>INTER</small></th>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Khouma_Babacar.jpg" alt="Babacar"></td>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Valon_Behrami_2018.jpg" alt="Behrami"></td>
      <td></td>
    </tr>
    <tr>
      <th><img src="https://upload.wikimedia.org/wikipedia/en/c/cc/Chelsea_FC.svg" alt="Chelsea" style="height:40px;"><br><small>CHELSEA</small></th>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Nicolas_Anelka.jpg" alt="Anelka"></td>
      <td><img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Dennis_Zakaria_2021.jpg" alt="Zakaria"></td>
      <td></td>
    </tr>
  </table>

  <div class="form-container">
    <form class="d-flex justify-content-center">
      <input type="text" class="form-control w-25 me-2" placeholder="Type the footballer here">
      <button type="submit" class="btn btn-light">↩️</button>
    </form>
    <p class="mt-3 text-muted">Anelka has been added on the only possible spot</p>
  </div>
    </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection