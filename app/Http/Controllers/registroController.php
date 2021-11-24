<?php

namespace App\Http\Controllers;

use App\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Controllers\registratesclientes;
use Illuminate\Http\Request;

class registroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use registratesclientes;

    public function index()
    {
        return view('cliente.registrate');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cliente'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol_id' => ['required', 'int'],
        ]);
    }
    protected function create(array $data)
    {
        return cliente::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol_id' => $data['rol_id'],
        ]);
    }
    public function store(Request $request)
    {
        //

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rol_id' => 'required',
        ]);
        cliente::create($request->all());
        return view('auth.login');
    }
}
