@extends('layout/plantilla')

@section('home','Crear Usuarios')

@section('contenido')

<div class="card text-bg-dark mb-3">
    <h5 class="card-header text-center border-4 border-light">Editar</h5>
    <div class="card-body">
      <h5 class="card-title text-center">Editar Usuario</h5>
      <p class="card-text">
        <form action="#" method="post">
            <label for="usu_nombre">Nombre</label>
            <input type="text" name="usu_nombre" id="usu_nombre" placeholder="Introduzca Nombre Usuario" class="form-control" required>
            <label for="usu_telefono">Telefono</label>
            <input type="text" name="usu_telefono" id="usu_telefono" placeholder="Introduzca Telefono Usuario" class="form-control" required>
            <label for="usu_email">Email</label>
            <input type="text" name="usu_email" id="usu_email" placeholder="Introduzca Email Usuario" class="form-control" required>
            <button type="" class="btn btn-success">Actualizar</button>
            <a class="btn btn-warning " href="{{route("personas.index")}}" role="button">Cancelar</a>

        </form>
      </p>
    </div>
  </div>


@endsection
