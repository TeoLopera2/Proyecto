@extends('layouts.app')

@section('content')

<h1>Crear Usuario</h1>

<form action="{{route('users.store')}}" method="POST">
    @csrf

    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Documento</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Documento" name="id">
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassword4">Nombre</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="Nombre" name="first_name">
        </div>
      </div>
      <div class="form-group col-md-12">
        <label for="inputAddress">Apellido</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Apellido" name="last_name">
      </div>
      <div class="form-group col-md-12">
        <label for="inputAddress2">Telefono</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefone">
      </div>
      <div class="form-group col-md-12">
          <label for="inputZip">Correo</label>
          <input type="text" class="form-control" id="inputZip" placeholder="Example@..." name="email">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Guardar</button>


@endsection
