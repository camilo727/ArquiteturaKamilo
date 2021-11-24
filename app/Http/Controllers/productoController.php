<?php

namespace App\Http\Controllers;
use App\producto;
use App\inventario;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventario=inventario::all();
        $niña = producto::where('genero_id', '2')->orderBy('categoria_id', 'asc')->paginate(29);
        $mujer=producto::where('genero_id','1')->orderBy('categoria_id','asc')->paginate(29);
        return view('administrador.producto.producto',compact('mujer', 'niña', 'inventario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrador.producto.agregar_pro');
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'foto'=>'required',
            'talla'=>'required',
            'categoria_id'=>'required',
            'genero_id'=>'required'
        ]);
        producto::create($request->all());
        return redirect()->route('producto.index');
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
    public function edit(producto $mujer,$id)
    {
        //
        $producto=producto::find($id);
        return view('administrador.producto.modificar_pro',compact('producto'));
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'foto' => 'required',
            'talla' => 'required',
            'categoria_id' => 'required',
            'genero_id' => 'required'
        ]);
        producto::find($id)->update($request->all());
        return redirect()->route('producto.index');
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
        $producto=producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
