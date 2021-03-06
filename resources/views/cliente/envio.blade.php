@extends('cliente.navegador')

@section('title', 'envio')

@section('producto')
<br><br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/imagenes/'.$inventario->producto->foto)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carouselhttp://localhost/laravel_tienda/public/compra-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col">
            <a href="{{ route('compra')}}">
                <button type="button" class="btn btn-success btn-lg btn-block">AGREGAR AL CARRITO</button>
            </a>
            <br>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$inventario->id}}" aria-expanded="true" aria-controls="collapseOne">
                                DESCRICIONES
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne{{$inventario->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            {{$inventario->producto->descripcion}}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                LOGICA DE ENVIO
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <P>Si compras m??s de $40.000 tu env??o es gratis. Puede ser ropa sin descuento de Hombre, Mujer o Ni??o. No aplica para ropa del SALE.</P>
                            <P>Si no, el costo de tu env??o depende de tu ubicaci??n y es a partir de $6.000</P>
                            <P>En ciudades principales entregamos en 3 d??as h??biles.</P>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                CAMBIO Y GARANTIA
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Nosotros pagamos todos los gastos de env??o.</p>
                            <p>Cambios: Tienes 30 d??as desde que llega tu ropa para hacer el cambio.</p>
                            <p>Garant??as: Tienes 60 d??as desde que llega tu ropa para hacer la garant??a.</p>
                            <b>
                                <p>El cambio o devoluci??n no aplica si la ropa no est?? nueva o si es un Body o Bikini Bottom por ser ropa interior.</p>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
