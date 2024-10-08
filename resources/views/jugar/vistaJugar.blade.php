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
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <a href="#" class="btn btn-success btn-lg">Jugar</a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <div class="table-responsive">
                <table class="table table-responsive table-bordered border-primary">
                      <thead>
                        <tr class="table-active">
                                                                                                                                              
                        </tr>
                      </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
@endsection