@extends('cliente.navegador')


@section('title','mujer')



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
                                           <div class="row">

                                                    <div class="card-columns">
                                                @foreach ($niña as $mujeres)
                                                        <div class="card" style="width: 19rem;">
                                                            <img src="{{asset('/imagenes/'.$mujeres->foto)}}" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    $100.00 COP
                                                                </h5>
                                                                <a href="{{ route('principal_show',$mujeres->id)}}" class="btn btn-info">COMPRA</a>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
</div>
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
