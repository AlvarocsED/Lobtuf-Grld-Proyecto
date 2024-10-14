@extends('plantilla')
@section('contenido')
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('img/jugar/grid.png')}}" class="card-img-top" alt="Grid" width="250">
                <div class="card-body">
                  <h5 class="card-title">Lobtuf Grid</h5>
                  <p class="card-text">¿Eres capaz de adivinar todos los jugadores con estas pistas?</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-grif">
              <a href="#" class="btn btn-success btn-lg">Jugar</a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
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
            <div class="col-xl-2 col-xxl-2">
              <div class="d-none d-xl-block">
                <img src="{{asset('img/jugar/ney.jpg')}}" alt="Neymar" width="250 ">
              </div>
            </div>
          </div>
        </div>
@endsection