@extends('cliente.navegador')


@section('title', 'pedidos')

@section('content')
<!-- HOME -->
<header id="inicio-section">
    <div class="dark-overlay">
        <div class="home-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-none d-sm-block">
                        <!-- campo vacio-->
                        <div align="center">

                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">NUMERO DE PEDIDO</th>
                                        <th scope="col">nombre DEL CLIENTE</th>
                                        <th scope="col">PRODUCTO</th>
                                        <th scope="col">CANTIDAD</th>
                                        <th scope="col">TOTAL APAGAR</th>
                                    </tr>
                                    @foreach ($pedido as $item)


                                    <tr>
                                    <th scope="col">{{$item->id}}</th>
                                    <th scope="col">{{$item->venta->cliente->nombre}}</th>
                                    <th scope="col"><img src="{{asset('/imagenes/'.$item->producto->foto)}}" class="card-img-top" alt="..."></th>
                                    <th scope="col">{{$item->cantidad}}</th>
                                    <th scope="col">{{$item->total}}</th>
                                    </tr>
                                    @endforeach

                                </thead>
                                <tbody class="tbody-dark">

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

