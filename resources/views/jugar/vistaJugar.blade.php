@extends('plantilla')
@section('titulo')
    Jugar
@endsection

@section('contenido')

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
                        <th scope="col" width="50%">Tiemmpo</th>                                                  
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($partidas as $p)
                        <tr class="table-active">
                          <th scope="row"><input type="checkbox" class="form-check-input"></th>
                          <td>{{date('d/m/Y H:i:s',strtotime($p->created_at))}}</td>
                          <td>{{($p->finalizada?$p->puntos: '-')}}</td>
                          <td>{{$p->finalizada?$p->tiempo: '-'}}</td>
                        </tr>
                      @endforeach
                      
                    </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    
@endsection