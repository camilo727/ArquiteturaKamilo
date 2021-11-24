@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">PRODUCTOS</h3>
        </div>
        <form action="{{route('producto.store')}}" method="post">
            @csrf
            <strong>NOMBRE:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            <strong>DESCRIPCION:</strong>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required>

            <div class="form-group">
                <label for="exampleFormControlFile1"><strong>AGREGAR FOTO:</strong></label>
                <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1">
            </div>

            <strong>TALLAGE:</strong>
            <input type="text" name="talla" class="form-control" placeholder="Tallage" required>

            <strong>CATEGORIA:</strong> <br>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    vestido
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="2">
                <label class="form-check-label" for="exampleRadios2">
                    camisa
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="3">
                <label class="form-check-label" for="exampleRadios2">
                    blusa
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="4">
                <label class="form-check-label" for="exampleRadios2">
                    falda
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="5">
                <label class="form-check-label" for="exampleRadios2">
                    short
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="6">
                <label class="form-check-label" for="exampleRadios2">
                    jeans
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="categoria_id" id="exampleRadios2" value="7">
                <label class="form-check-label" for="exampleRadios2">
                    pantalones
                </label>
            </div> <br>
            <strong>GENERO:</strong><br>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="genero_id" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    mujer
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="genero_id" id="exampleRadios2" value="2">
                <label class="form-check-label" for="exampleRadios2">
                    niña
                </label>
            </div>
            <center>
                <input type="submit" class="btn btn-primary btn-sm" value="guardar">
            </center>

        </form>
    </div>
</div>
@endsection
