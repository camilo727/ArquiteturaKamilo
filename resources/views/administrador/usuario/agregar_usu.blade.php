@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">agregar los cliente</h3>
        </div>
        <form action="{{route('usuario.store')}}" method="post">
            {{csrf_field()}}



            <strong>Nombre:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>

            <strong>apellido:</strong>
            <input type="text" name="apellido" class="form-control" placeholder="apellido" required>


            <strong>email:</strong>
            <input type="text" name="email" class="form-control" placeholder="email" required>



            <strong>contraseña:</strong>
            <input type="password" name="pass" class="form-control" placeholder="contraseña" required>

            <input type="hidden" name="rol_id" value="1">
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>

@endsection
