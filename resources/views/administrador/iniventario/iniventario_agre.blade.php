@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">AGREGAR EL INVENTARIO</h3>
        </div>
        <form action="{{route('inventario.store')}}" method="post">
            @csrf
            <strong>CANTIDAD DEL PRODUCTO:</strong>
            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" required>
            <strong>COSTO DEL PRODUCTO:</strong>
            <input type="number" name="percio_compra" class="form-control" placeholder="Costo del producto" required>
            <strong>PRECIO DE VENTA:</strong>
            <input type="number" name="precio_venta" class="form-control" placeholder="Precio de venta" required>

            <input type="hidden" name="producto_id" value="{{$producto->id}}">
            <center>
                <input type="submit" class="btn btn-primary btn-sm" value="guardar">
            </center>

        </form>
    </div>
</div>
@endsection
