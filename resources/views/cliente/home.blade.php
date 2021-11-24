@extends('cliente.navegador')


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
                                            <a href="{{ route('mujer')}}">
                                                <div class="col-2"><img src="{{asset('/imagenes/mujer.png')}}" alt="" sizes="" srcset=""></div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('niña')}}">
                                                <div class="col-2"><img src="{{asset('/imagenes/niñas_foto.png')}}" alt="" sizes="" srcset=""></div>
                                            </a>
                                        </td>
                                        <td>

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

