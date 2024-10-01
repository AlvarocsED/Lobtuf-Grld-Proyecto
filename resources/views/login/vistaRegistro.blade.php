@extends('plantilla')
@section('contenido')
<!--Fomulario de registro-->  
        <div class="container-fluid">
            <div class="border-bottom border-dark border-4 d-flex justify-content-center">
            <p class="fs-2 text-center">Registro</p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
    <form action="{{route('crearUsuario')}}" method="POST" class="row g-3 d-flex justify-content-md-center  ">
        @csrf
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="" name="name" id="name">
                <label for="name">Nombre de usuario</label>
            </div>
        </div>
        @error('name')
            <div class="text-danger">
                Campo obligatorio
            </div>
        @enderror
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-floating">
                <input type="email" class="form-control" placeholder="" name="email" id="email">
                <label for="email">Email</label>
            </div>
        </div>
        @error('email')
            <div class="text-danger">
                Campo obligatorio. Email ya en uso
            </div>
        @enderror
        <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <div class="form-floating">
                <input type="password" class="form-control" placeholder="" name="password" id="password">
                <label for="password">Contraseña</label>
            </div>
        </div>
        @error('password')
            <div class="text-danger">
                Campo obligatorio
            </div>
        @enderror
        <div class="col-12 col-lg-6 col-md-6 col-sm-12">
            <div class="form-floating">
                <input type="password" class="form-control" placeholder="" name="password2" id="password2">
                <label for="password2">Contraseña</label>
            </div>
        </div>
        @error('password2')
            <div class="text-danger">
                Campo obligatorio. Contraseñas no coincidentes
            </div>
        @enderror
        <div class="col-auto d-flex justify-content-center">
            <button type="submit" class="btn btn-success text-dark" width="100">Confirmar</button>
            <a href="{{route('vistaLogin')}}" class="btn btn-danger text-dark">Cancelar</button></a>
        </div>
        <div>
            <span class="display-7">@if (session('mensaje'))
               {{ session('mensaje');}}
            @endif</span>
        </div>
    </form>
            </div>
        </div>
</div>
@endsection