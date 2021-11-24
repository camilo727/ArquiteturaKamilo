@extends('layouts.app')


@section('title', 'login')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="login-box">
    <img src="{{ asset('/imagenes/mari_O.jpg')}}" class="avatar" alt="Avatar Image">

    <h1>Login Here</h1>
<form action="{{route('registro_store')}}" method="post">
        {{csrf_field()}}
        <!-- USERNAME INPUT -->
        <label for="username">NOMBRE</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        <label for="username">APELLIDO</label>
        <input type="text" name="apellido" class="form-control" placeholder="apellido" required>
        <label for="username">EMAIL</label>
        <input type="text" name="email"placeholder="email" required>

        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="password"  placeholder="contraseña" required>

        <input type="hidden" name="rol_id" value="1">
        <input type="submit" value="REGISTRO">
    </form>
</div>
<br><br> <br><br> <br><br><br> <br><br><br>
@endsection
