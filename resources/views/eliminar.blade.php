@extends('layout/plantilla')

@section('home','Crear Usuarios')

@section('contenido')

<div class="card text-bg-dark mb-3">
    <h5 class="card-header text-center border-4 border-light">Eliminar</h5>
    <div class="card-body">
      <h5 class="card-title text-center">Eliminar Usuario</h5>
        <p class="card-text">
            {{-- <div class="alert alert-danger" role="alert">
                ?Desea Eliminar El Usuario --}}
                <table class="table table-sm table-bordered table-dark table-hover border-3 border-light">
                    <thead>
                        <th>ELIMINAR</th>
                    <th>FECHA</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>NOMBRE</th>
                    <th>ID</th>
                    </thead>
                    <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a name="" id="" class="btn btn-info" href="{{route('personas.index')}}" role="button">Cancelar</a>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </form>
            {{-- </div> --}}
        </p>
    </div>
  </div>


@endsection
