@extends('administrador.navegador')
@section('usuarios')
<br><br><br><br><br>
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">VENTAS</h3>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">cliente</th>
                    <th scope="col">fecha compra</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($venta as $ventas)
                <tr>
                    <th scope="row">{{$ventas->id}}</th>
                    <td>{{$ventas->cliente->nombre}}</td>
                    <td>{{$ventas->created_at}}</td>
                    <td>
                        <a href="{{route('venta.show',$ventas->id)}}" class="btn btn-primary" type="button">envios</a>
                        <a href="{{route('venta.index')}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$ventas->id}}">eliminar</a>

                        <div class="modal fade" id="exampleModal{{$ventas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{route('venta.destroy',$ventas->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p>eliminar<b> {{$ventas->cliente->nombre}}</b> de ventas</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                                            <button type="submit" class="btn btn-primary">aceptar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">ENVIOS</h3>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">pais</th>
                    <th scope="col"> ciudad</th>
                    <th scope="col">codigo postal</th>
                    <th scope="col">direcion</th>
                    <th scope="col">fecha de venta</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($envio as $envios)
                <tr>
                    <th scope="row">{{$envios->id}}</th>
                    <td>{{$envios->pais}}</td>
                    <td>{{$envios->ciudad}}</td>
                    <td>{{$envios->codigo_postal}}</td>
                    <td>{{$envios->direcion}}</td>
                    <td>{{$envios->venta->created_at}}</td>
                    <td>
                        <a href="{{route('venta.show',$ventas->id)}}" class="btn btn-primary" type="button">envios</a>
                        <a href="{{route('venta.index')}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$ventas->id}}">eliminar</a>

                        <div class="modal fade" id="exampleModal{{$ventas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{route('venta.destroy',$ventas->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p>eliminar<b> {{$ventas->cliente->nombre}}</b> de ventas</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
                                            <button type="submit" class="btn btn-primary">aceptar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
