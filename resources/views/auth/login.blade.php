@extends('layouts.app')


@section('title', 'login')

@section('content')
<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br> <br> <br>
<div class="login-box">
<img src="{{ asset('/imagenes/mari_O.jpg')}}" class="avatar" alt="Avatar Image">
      <h1>Login Here</h1>
    <form action="{{route('login_post')}}" method="POST" autocomplete="off">
                @csrf
                @method('Get')
           @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="alert-text">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
        <!-- USERNAME INPUT -->
        <label for="username">Correo:</label>
       <input type="text"name="email" value="{{old('email')}}" placeholder="digite el email">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control"placeholder="Enter Password">
        <input type="submit" value="Log In">
        <a href="#">Lost your Password?</a><br>
            <a href="{{route('Register')}}">Registro</a>
    </form>
    </div>
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
