@extends('cliente.home.navegador')


@section('title', 'home')

@section('login')
<!-- HOME -->
<header id="inicio-section">
    <div class="dark-overlay">
        <div class="home-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-none d-sm-block">
                        <!-- campo vacio-->
                        <div align="center">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="http://3.128.26.50:81/mujer">
                                                <div class="col-2"><img src="{{asset('/imagenes/mujer.png')}}" alt="" sizes="" srcset=""></div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="http://3.128.26.50:81/ni%C3%B1a">
                                                <div class="col-2"><img src="{{asset('/imagenes/modelo_niña.jpg')}}" alt="" sizes="" srcset=""></div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection


    @section('foti')
    <br> <br>
    <div align="center">
        <?php
        for ($i = 0; $i <= 9; $i++) { ?>
            <img src="{{asset('/imagenes/vestidos.jpg')}}" alt="">
            $ 200.000 COP
            <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>

        <?php
        }
        ?>

    </div>

    @endsection
