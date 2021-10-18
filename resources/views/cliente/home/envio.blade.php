@extends('cliente.navegador')

@section('title', 'envio')

@section('producto')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/imagenes/falada.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/imagenes/camisa.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/imagenes/vestidos.jpg')}}" class="d-block w-100" alt="...">
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
            <a href="http://localhost/laravel_tienda/public/compra">
                <button type="button" class="btn btn-success btn-lg btn-block">AGREGAR AL CARRITO</button>
            </a>
            <br>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                DESCRICIONES
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            97%POLYESTER/POLIESTER
                            <br><br>
                            3%ELASTANE/ELASTANO
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
                            <P>Si compras más de $40.000 tu envío es gratis. Puede ser ropa sin descuento de Hombre, Mujer o Niño. No aplica para ropa del SALE.</P>
                            <P>Si no, el costo de tu envío depende de tu ubicación y es a partir de $6.000</P>
                            <P>En ciudades principales entregamos en 3 días hábiles.</P>
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
                            <p>Nosotros pagamos todos los gastos de envío.</p>
                            <p>Cambios: Tienes 30 días desde que llega tu ropa para hacer el cambio.</p>
                            <p>Garantías: Tienes 60 días desde que llega tu ropa para hacer la garantía.</p>
                            <b>
                                <p>El cambio o devolución no aplica si la ropa no está nueva o si es un Body o Bikini Bottom por ser ropa interior.</p>
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
