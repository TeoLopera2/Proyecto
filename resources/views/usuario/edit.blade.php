@extends('layouts.app')

@section('content')

<h1>Editar Usuario</h1>

    <form action="{{route('users.update')}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-12">
              <input type="hidden" class="form-control" id="inputEmail4" placeholder="Documento" name="id" value="{{$user->id}}">
            </div>
            <div class="form-group col-md-12">
              <label for="inputPassword4">Nombre</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre" name="first_name" value="{{$user->first_name}}">
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="inputAddress">Apellido</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Apellido" name="last_name" value="{{$user->last_name}}">
          </div>
          <div class="form-group col-md-12">
            <label for="inputAddress2">Telefono</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefone" value="{{$user->telefone}}">
          </div>
          <div class="form-group col-md-12">
              <label for="inputZip">Correo</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Example@..." name="email" value="{{$user->email}}">
          </div>
          <br>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>


@endsection
