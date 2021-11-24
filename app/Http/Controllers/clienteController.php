<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cliente = cliente::where('rol_id', '1')->get();
        return view('administrador.usuario.usuario',compact('cliente'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrador.usuario.agregar_usu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'rol_id' => 'required',
        ]);
        cliente::create($request->all());
        return redirect()->route('usuario.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente,$id)
    {
        //
        $cliente=cliente::find($id);
        return view('administrador.usuario.modificar_usu',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente,$id)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
        ]);
        cliente::find($id)->update($request->all());
        return redirect()->route('usuario.index')
                    ->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
