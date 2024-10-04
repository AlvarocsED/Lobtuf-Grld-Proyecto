@extends('plantilla')
@section('contenido')
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
              <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">
                <img src="https://enc11rypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR35Jja9Bf3H8LaRWSax_eOJWu6M0xi3rVLKA&s" class="card-img-top" alt="Grid">
                <div class="card-body">
                  <h5 class="card-title">Lobtuf Grid</h5>
                  <p class="card-text">¿Eres capaz de adivinar todos los jugadores con estas pistas?</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <a href="#" class="btn btn-lg btn-success">Jugar</a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <table class="table table-borderless">
                <thead>
                  <tr class="table-active">
                    <th colspan="2" class="text-center text-info">
                      <p class="fw-bold">Partidas</p>
                    </th>
                  </tr>
                  <tr class="table-active">
                    <td><th>Partida</th></td>
                    <td><th>Puntuación</th></td> 
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-active">
                    <th scope="row">#</th>
                    <td>1</td>
                    <td>26</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection