@extends('plantilla')
@section('contenido')
<!--Fomulario de registro-->
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                  <p class="h1 text-center d-flex justify-content-center">Registro</p>
                  <form action="{{route('crearUsuario')}}" method="POST" class="mx-1 mx-md-4">
                    @csrf
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"></path>
                          </svg>
                        </span>
                        <div class="form-floating">
                          <input type="text" class="form-control" id=" name" name="name" placeholder="Nombre de Usuario">
                          <label for="name">Nombre de Usuario</label>
                        </div>
                      </div>
                      @error('name')
                      <div class="text-danger">
                          Campo obligatorio
                      </div>
                  @enderror          
                      <div class="input-group mb-3">
                        <span class="input-group-text">@</span>
                        <div class="form-floating">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      @error('email')
                        <div class="text-danger">
                          Campo obligatorio. Email ya en uso
                        </div>
                      @enderror
                      <div class="input-group mb-3">
                        <span class="input-group-text">#</span>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                    @error('password')
                      <div class="text-danger">
                        Campo obligatorio
                      </div>
                    @enderror
                    <div class="input-group mb-3">
                      <span class="input-group-text">#</span>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="password2" name="password2" placeholder="Repetie Contraseña">
                      <label for="password2">Repetir Contraseña</label>
                    </div>
                  </div>
                  @error('password2')
                    <div class="text-danger">
                      Campo obligatorio
                    </div>
                  @enderror
                  </div>
                  </form>
                </div>
                <div class="d-flex justify-content-center">
                  <img src="{{asset('img/registro/lmcr.jpg')}}" alt="LMCR">
                </div>
                </div>
@endsection