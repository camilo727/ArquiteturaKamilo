<?php

namespace App\Http\Controllers;
use App\producto;
use App\inventario;
use Illuminate\Http\Request;

class inventarioctoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'cantidad' => 'required',
            'percio_compra' => 'required',
            'precio_venta' => 'required',
            'producto_id' => 'required'
        ]);
        inventario::create($request->all());
        return redirect()->route('inventario.index');
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
        $producto = producto::find($id);
        return view('administrador.iniventario.iniventario_agre', compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventario = inventario::find($id);
        return view('administrador.iniventario.inventario_modi', compact('inventario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'cantidad' => 'required',
            'percio_compra' => 'required',
            'precio_venta' => 'required'
        ]);
        inventario::find($id)->update($request->all());
        return redirect()->route('inventario.index');

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
        $inventario=inventario::find($id);
        $inventario->delete();
        return redirect()->route('inventario.index')->with('success', 'usuario eliminado');

    }
}
