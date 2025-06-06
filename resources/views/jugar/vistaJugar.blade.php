@extends('plantilla')
@section('contenido')
<!doctype html>
<html lang="en">
  <head>
    <title>Bienvenido a Lobtuf</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
            <div class="card" style="width: 18rem;">
              <img src="{{asset('img/jugar/grid.png')}}" class="card-img-top" alt="Grid" width="250">
              <div class="card-body">
                <h5 class="card-title">Lobtuf Grid</h5>
                <p class="card-text">¿Eres capaz de adivinar todos los jugadores con estas pistas?</p>
                <a href="{{route('vistaJuegoFinal')}}" class="btn btn-success btn-lg d-grid">Jugar</a>       
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
            <div class="border-bottom border-dark">
              <h1 class="display-6 text-center">Historial de partidas 
              </h1>
            </div>
            <div class="table-responsive">
              <table class="table table-responsive table-borderless">
                    <thead>
                      <tr class="table-active">
                        <th scope="col" width="5%"><input type="checkbox" class="form-check-input"></th>
                        <th scope="col" width="45%">Partida</th>
                        <th scope="col" width="50%">Puntuacion</th>                                                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-active">
                        <th scope="row"><input type="checkbox" class="form-check-input"></th>
                        <td>Ejemplo partida 1</td>
                        <td>90</td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
@endsection