@extends('layouts.app')

@section('content')

    <h1>Usuarios</h1>

    <a href="{{route('users.create')}}" class="btn btn-primary">Nuevo Usuario</a>

    <table class="table table-bordered, mt-3">

        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Acciones</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->telefone}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                    <form method="POST" action="{{route('users.delete', $user->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btnDelete" >Eliminar</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>



@endsection

<script type="module">

    $(document).ready(function(){

        $('.btnDelete').click(function(event){

            event.preventDefault();

            const form = $(this).closest('form');

            Swal.fire({
            title: "Esta seguro?",
            text: "No puedes revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Si, Borrar",
            cancelButtonText: "Cancelar"
            }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
            });

        })



    })

</script>


