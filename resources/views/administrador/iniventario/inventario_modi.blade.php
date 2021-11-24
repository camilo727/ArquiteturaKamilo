@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">modifica el inventario</h3>
        </div>
        <form action="{{route('inventario.update',$inventario->id)}}" method="post">
            @csrf
            @method('PUT')
            <strong>CANTIDAD DEL PRODUCTO:</strong>
            <input type="number" name="cantidad" value="{{$inventario->cantidad}}" class="form-control" placeholder="Cantidad" required>
            <strong>COSTO DEL PRODUCTO:</strong>
            <input type="number" name="percio_compra" value="{{$inventario->percio_compra}}" class="form-control" placeholder="Costo del producto" required>
            <strong>PRECIO DE VENTA:</strong>
            <input type="number" name="precio_venta" value="{{$inventario->precio_venta}}" class="form-control" placeholder="Precio de venta" required>

            <center>
                <input type="submit" class="btn btn-primary btn-sm" value="guardar">
            </center>

        </form>
    </div>
</div>
@endsection
