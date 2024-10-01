@extends('plantilla')
@section('contenido')
<!-- Iniciar sesion -->
<section class="py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="mb-5">
            <h2 class="display-5 fw-bold text-center">Iniciar Sesión</h2>
            <p class="text-center m-0">¿No eres usuario? <a href="{{route('vistaRegistro')}}">Registrate</a></p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="row gy-5 justify-content-center">
            <div class="col-12 col-lg-5">
              <form action="{{route('validarLogin')}}" method="POST">
                @csrf
                <div class="row gy-3 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control border-0 border-bottom rounded-0" name="email" id="email" placeholder="" required>
                      <label for="email" class="form-label">Nombre de Usuario o Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control border-0 border-bottom rounded-0" name="password" id="password" placeholder="" required>
                      <label for="password" class="form-label">Contraseña</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-between">
                      <div class="col-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="recordar" id="recordar">
                          <label class="form-check-label text-secondary" for="recordar">
                            Recordar Contraseña
                          </label>
                        </div>
                      </div>
                      </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-lg btn-dark rounded-0 fs-6" type="submit" name="inicioS">Iniciar Sesión</button>
                      <div class="alert alert-primary" role="alert">
                        Para jugar <a href="{{route('vistaRegistro')}}">Registrate</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-12 col-lg-2 d-flex align-items-center justify-content-center gap-3 flex-lg-column">
              <div class="bg-dark h-100 d-none d-lg-block" style="width: 1px; --bs-bg-opacity: .1;"></div>
              <div class="bg-dark w-100 d-lg-none" style="height: 1px; --bs-bg-opacity: .1;"></div>
              <div></div>
              <div class="bg-dark h-100 d-none d-lg-block" style="width: 1px; --bs-bg-opacity: .1;"></div>
              <div class="bg-dark w-100 d-lg-none" style="height: 1px; --bs-bg-opacity: .1;"></div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center">
              <div class="d-flex gap-3 flex-column w-100 ">
                <img src="{{asset('img/registro/casillas.jpg')}}" alt="Mundial 2010"></div>
  </section>
    @endsection