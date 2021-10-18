<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link href="{{asset('/css/estilo.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/estilo1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <title>@yield('title','maria O')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('/imagenes/mari_O.jpg')}}" alt="Mi empresa" style="width:20%;">

            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/home" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/mujer" class="nav-link">MUJER</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/ni%C3%B1a" class="nav-link">NIÑA</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">INGRESO</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/pedidos" class="nav-link">MI PEDIDO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('login')

    </div>
    </header>
    <br><br><br>
    @yield('foti')
    @yield('barra_nv_mujer')
    @yield('barra_nv_niña')
    @yield('formulario_de_envio')
    @yield('content')
    @yield('producto')
    @yield('envio')


    <footer>
        <p> Juan Camilo Narvaez &copy; 2019;</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
