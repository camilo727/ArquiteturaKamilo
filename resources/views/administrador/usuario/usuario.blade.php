@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">CLIENTE</h3>
        </div>
        <a href="{{ route('usuario.create') }}" type="button" class="btn btn-warning btn-lg btn-block">agregar</a>
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">tabla de cliente</h3>
        </div>
        <table class=" table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">email</th>
                    <th scope="col">rol</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $camilo)

                <tr>
                    <th scope="row">{{$camilo->id}}</th>
                    <td>{{$camilo->nombre}}</td>
                    <td>{{$camilo->apellido}}</td>
                    <td>{{$camilo->email}}</td>
                    <td>{{$camilo->rol->nombre}}</td>
                    <td>
                        <a href="{{route('usuario.edit',$camilo->id)}}" type="button" class="btn btn-warning">
                            modicar
                        </a>
                        <form action="{{route('venta.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="cliente_id" value="{{$camilo->id}}">
                            <button type="submit" class="btn btn-primary"> agregar a venta</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
