<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos=Producto::all();
        return view('Producto.indexProducto',compact('Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Producto.Formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Producto= new Producto;

        $Producto->Nombre= $request->Nombre;
        $Producto->Descripcion= $request->Descripcion;
        $Producto->cantidad= $request->cantidad;

        $Producto->save();
        return redirect()->route('Producto.index');
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
        
        $producto = Producto::find($id);
        return view('Producto.editar',compact('producto'));
    
        
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
        $producto = Producto::find($id);
        return view('Producto.editar',compact('producto'));
        
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
        $producto = Producto::find($id);
        $producto->Nombre=$request->Nombre;
        $producto->Descripcion = $request->Descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->save();

        return redirect()->route('Producto.index');
       


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('Producto.index');
    }
}
