@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">agregar envios</h3>
        </div>
        <form action="{{route('envios_admin.store')}}" method="post">
            {{csrf_field()}}



            <strong>pais:</strong>
            <input type="text" name="pais" class="form-control" placeholder="Pais" required>

            <strong>ciudad:</strong>
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" required>


            <strong>Codigo postal del pais:</strong>
            <input type="text" name="codigo_postal" class="form-control" placeholder="Codigo postal" required>



            <strong>Direcion:</strong>
            <input type="text" name="direcion" class="form-control" placeholder="Direcion" required>

            <input type="hidden" name="venta_id" value="{{$venta->id}}">
            <button type="submit" class="btn btn-primary">GUARDAR</button>
        </form>
    </div>
</div>

@endsection
