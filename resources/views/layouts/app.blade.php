


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link href="{{asset('/css/estilo.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="{{ route('principal')}}" class="navbar-brand">
                <img src="{{ asset('/imagenes/mari_O.jpg')}}" alt="Mi empresa" style="width:20%;">

            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('principal')}}" class="nav-link">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mujer')}}" class="nav-link">MUJER</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('niña')}}" class="nav-link">NIÑA</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">INGRESO</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">SALIR</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout')}}" class="nav-link">MI PEDIDO
                            <img src="{{ asset('/imagenes/shop-bag.png')}}" style="width:15%;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <br> <br> <br> <br>
      <br> <br> <br> <br>

@yield('content')
<br> <br> <br> <br>

<footer>
        <p> Juan Camilo Narvaez &copy; 2019</p>
    </footer>


  </body>
</html>
