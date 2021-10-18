<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/estilos2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/estilo.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/estilo1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ADMINTRADOR</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/usuario')}}" class="nav-link">USUARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/producto')}}" class="nav-link">PRODUCTOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/pedido')}}" class="nav-link">PEDIDO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login')}}" class="nav-link">INGRESO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control <small>Administre su sitio</small></h1>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Panel de Control</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.html" class="list-group-item active color-principal">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
                        </a>
                        <a href="{{ url('/usuario')}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> usuarios <span class="badge">39</span></a>
                        <a href="{{ url('/producto')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> productos <span class="badge">45</span></a>
                        <a href="{{ url('/pedido')}}" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> pedidos <span class="badge">112</span></a>
                    </div>

                    <div class="well">
                        <h4>Espacio en disco</h4>
                        <div class="progress">
                            <div class="barra-progreso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                        </div>
                        <h4>Ancho de banda </h4>
                        <div class="progress">
                            <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                75%
                            </div>
                        </div>
                    </div>
                </div>
                @yield('usuarios')
                @yield('producto')

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="{{asset('/js/bootstrap.min.js')}}"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
