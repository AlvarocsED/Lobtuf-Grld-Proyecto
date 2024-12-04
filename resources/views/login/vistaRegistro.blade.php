@extends('plantilla')
@section('contenido')
<!--Fomulario de registro-->
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>
  
                  <form class="mx-1 mx-md-4" action="{{route('crearUsuario')}}" method="POST">  
        @csrf
        <div class="d-flex flex-row align-items-center mb-4">
            <div data-mdb-input-init class="form-outline flex-fill mb-0">
              <input type="text" id="name" name="name" class="form-control" />
              <label class="form-label" for="name">Nombre</label>
            </div>
          </div>
        @error('name')
            <div class="text-danger">
                Campo obligatorio
            </div>
        @enderror
        <div class="d-flex flex-row align-items-center mb-4">
            <div data-mdb-input-init class="form-outline flex-fill mb-0">
              <input type="email" id="email" name="email" class="form-control" />
              <label class="form-label" for="email">Email</label>
            </div>
          </div>
        @error('email')
            <div class="text-danger">
                Campo obligatorio. Email ya en uso
            </div>
        @enderror
        <div class="d-flex flex-row align-items-center mb-4">
            <div data-mdb-input-init class="form-outline flex-fill mb-0">
              <input type="password" id="password" name="password" class="form-control"/>
              <label class="form-label" for="password">Contraseña</label>
            </div>
          </div>
        @error('password')
            <div class="text-danger">
                Campo obligatorio
            </div>
        @enderror
        <div class="d-flex flex-row align-items-center mb-4">
            <div data-mdb-input-init class="form-outline flex-fill mb-0">
              <input type="password" id="password2" name="password2" class="form-control"/>
              <label class="form-label" for="password2">Repetir contraseña</label>
            </div>
          </div>
        @error('password2')
            <div class="text-danger">
                Campo obligatorio. Contraseñas no coincidentes
            </div>
        @enderror
        <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" value="" id="terms" name="terms"/>
            <label class="form-check-label" for="terms">
              Acepto los <a href="#">terminos y condiciones</a>
            </label>
          </div>
          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" id="registrar">Registrarse</button>
          </div>
        <div>
            <span class="display-7">@if (session('mensaje'))
               {{ session('mensaje');}}
            @endif</span>
        </div>
    </form>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="{{asset('img/registro/lmcr.jpg')}}"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      // Función para habilitar/deshabilitar el botón
      function toggleSubmitButton() {
        const allFilled = $('#name').val().trim() !== "" &&
                          $('#email').val().trim() !== "" &&
                          $('#password').val().trim() !== "" &&
                          $('#password2').val().trim() !== "";
        const termsChecked = $('#terms').is(':checked');
        
        // Habilitar el botón si todos los campos están llenos y el checkbox está seleccionado
        if (allFilled && termsChecked) {
          $('#registrar').prop('disabled', false);
        } else {
          $('#registrar').prop('disabled', true);
        }
      }
  
      // Vincular eventos de cambio a los campos del formulario y el checkbox
      $('#name, #email, #password, #password2, #terms').on('input change', function() {
        toggleSubmitButton();
      });
  
      // Comprobar el estado inicial al cargar la página
      toggleSubmitButton();
    });
  </script>
</section>
@endsection