@extends('cliente.navegador')

@section('title', 'compra')

@section('envio')
<br><br>

<h1><b>DATOS DEL ENVIO</b></h1>
<form>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">PAIS</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="PAIS">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">CIUDAD</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="CIUDAD">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">REGION</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="REGION">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">DIRECION</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="DIRECION">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">TALLA</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        S
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        M
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                        L
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-2">GENERO</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    MUJER
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    HOMBRE
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">COMPRA</button>
        </div>
    </div>
</form>
@endsection
