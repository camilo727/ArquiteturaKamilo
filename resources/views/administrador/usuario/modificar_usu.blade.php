@extends('administrador.navegador')
@section('usuarios')

<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">modifica el cliente</h3>
        </div>
        <form action="{{route('usuario.update',$cliente->id)}}" method="post">
            @csrf
            @method('PUT')
            <strong>Nombre:</strong> <br>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" placeholder="Nombre" required>

            <strong>apellido:</strong> <br>
            <input type="text" name="apellido" value="{{ $cliente->apellido }}" class="form-control" placeholder="apellido" required>


            <strong>email:</strong> <br>
            <input type="text" name="email" value="{{ $cliente->email }}" class="form-control" placeholder="email" required>

            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>
@endsection
