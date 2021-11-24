<?php

namespace App\Http\Controllers;
use App\venta;
use App\envio;
use App\cliente;
use Illuminate\Http\Request;

class ventactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $envio=envio::orderBy('id', 'asc')->paginate(3);
        $venta=venta::orderBy('id', 'asc')->paginate(3);
        return view('administrador.ventas.venta',compact('venta', 'envio'));
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
            'cliente_id'=>'required'
        ]);
        venta::create($request->all());
        return redirect()->route('venta.index');
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
        $venta=venta::find($id);
        return view('administrador.envio.agrega_envio',compact('venta'));
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
        $venta=venta::find($id);
        $venta->delete();
        return redirect()->route('venta.index');
    }
}
