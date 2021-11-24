@extends('administrador.navegador')
@section('usuarios')
<div class="col-md-9">
    <!-- Vista rápida del sitio -->
    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">PRODUCTOS</h3>
        </div>
        <a href="{{route('producto.create')}}" type="button" class="btn btn-warning btn-lg btn-block">agrega los productos</a>
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">tabla de productos para mujer</h3>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">foto</th>
                    <th scope="col">tallas</th>
                    <th scope="col">categoria</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mujer as $mujeres)
                <tr>
                    <th scope="row">{{$mujeres->id}}</th>
                    <td>{{$mujeres->nombre}}</td>
                    <td>{{$mujeres->descripcion}}</td>
                    <td><img src="{{asset('/imagenes/'.$mujeres->foto)}}" class="card-img-top" alt="..."></td>
                    <td>{{$mujeres->talla}}</td>
                    <td>{{$mujeres->categoria->categoria}}</td>
                    <td>
                        <a href="{{route('inventario.show',$mujeres->id)}}" class="btn btn-primary" type="button">AGREGAR INVENTARIO</a>
                        <a href="{{route('producto.edit',$mujeres->id)}}" type="button" class="btn btn-warning">
                            MODICAR
                        </a>
                        <a href="{{route('inventario.index')}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$mujeres->id}}">eliminar</a>

                        <div class="modal fade" id="exampleModal{{$mujeres->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{route('producto.destroy',$mujeres->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p>eliminar<b> {{$mujeres->nombre}}</b> del los productos</p>
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
            <h3 class="panel-title">tabla de productos para niña</h3>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">foto</th>
                    <th scope="col">tallas</th>
                    <th scope="col">categoria</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($niña as $niñas)
                <tr>
                    <th scope="row">{{$niñas->id}}</th>
                    <td>{{$niñas->nombre}}</td>
                    <td>{{$niñas->descripcion}}</td>
                    <td><img src="{{asset('/imagenes/'.$niñas->foto)}}" class="card-img-top" alt="..."></td>
                    <td>{{$niñas->talla}}</td>
                    <td>{{$niñas->categoria->categoria}}</td>
                    <td>
                        {{-- <a href="{{route('inventario.show',$niñas->id)}}" type="button" class="btn btn-primary">AGREGAR INVENTARIO</a> --}}
                        <a href="{{route('producto.edit',$niñas->id)}}" type="button" class="btn btn-warning">
                            MODICAR
                        </a>
                        <a href="{{route('inventario.index')}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$niñas->id}}">eliminar</a>

                        <div class="modal fade" id="exampleModal{{$niñas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{route('producto.destroy',$niñas->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p>eliminar<b> {{$niñas->nombre}}</b> del los productos</p>
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
            <h3 class="panel-title">inventario de productos</h3>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">producto</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">costo de elaboracion</th>
                    <th scope="col">costo de venta</th>
                    <th scope="col">botones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventario as $inventarios)
                <tr>
                    <th scope="row">{{$inventarios->id}}</th>
                    <td>{{$inventarios->producto->nombre}}</td>
                    <td>{{$inventarios->cantidad}}</td>
                    <td>{{$inventarios->percio_compra}}</td>
                    <td>{{$inventarios->precio_venta}}</td>
                    <td>
                        <a href="{{route('inventario.edit',$inventarios->id)}}" type="button" class="btn btn-warning">
                            MODICAR
                        </a>
                        <a href="{{route('inventario.index')}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$inventarios->id}}">eliminar</a>

                        <div class="modal fade" id="exampleModal{{$inventarios->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{route('inventario.destroy',$inventarios->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <p>eliminar<b> {{$inventarios->producto->nombre}}</b> del inventario</p>
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
