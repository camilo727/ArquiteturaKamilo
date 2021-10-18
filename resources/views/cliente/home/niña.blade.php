@extends('cliente.home.navegador')


@section('title', 'niña')


@section('barra_nv_niña')
<br><br>
<div class="row">
    <div class="col-3">
        <h1>CATEGORIA</h1>
        <br><br>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">vestidos</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">camisas y blusas</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">falada y short</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">jean y pantalones</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h1>VESTIDOS</h1>
                <?php
                for ($i = 0; $i <= 9; $i++) { ?>
                <img src="{{asset('/imagenes/vestidos_niña.jpg')}}" alt="">
                $ 200.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h1>BLUSAS Y CAMISAS</h1>
                <?php
                for ($i = 0; $i <= 6; $i++) { ?>
                <img src="{{asset('/imagenes/blusa_niña.jpg')}}" alt="">
                $ 50.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
                <?php
                for ($i = 0; $i <= 4; $i++) { ?>
                <img src="{{asset('/imagenes/camisa_niña.jpg')}}" alt="">
                $ 70.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h1> FALDAS Y BLUSAS</h1>
                <?php
                for ($i = 0; $i <= 6; $i++) { ?>
                <img src="{{asset('/imagenes/falda_niña.jpg')}}" alt="">
                $ 50.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
                <?php
                for ($i = 0; $i <= 4; $i++) { ?>
                <img src="{{asset('/imagenes/short_niña.jpg')}}" alt="">
                $ 70.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h1> jean y pantalones </h1>
                <?php
                for ($i = 0; $i <= 6; $i++) { ?>
                <img src="{{asset('/imagenes/jean_niña.jpg')}}" alt="">
                $ 50.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
                <?php
                for ($i = 0; $i <= 4; $i++) { ?>
                <img src="{{asset('/imagenes/pantalones_niña.jpg')}}" alt="">
                $ 70.000 COP
                <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
