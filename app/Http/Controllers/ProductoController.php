<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categoria;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria=Categoria::all();
        $silla=Producto::with('categoria')->get();
        return view('producto',['silla'=>$silla,'categoria'=>$categoria]);

}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    $categoria=Categoria::all();
    return view('producto_crear',['categoria'=>$categoria]);
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $producto=new Producto($request->all());
    $producto->save();

    $silla = Producto::all();
    //dd($variable);
    return view('producto',['silla'=>$silla]);

}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $producto=Producto::findOrFail($id);
    return view('producto_ver',['producto'=>$producto]);

}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
 /** $producto= Producto::findOrfail($id);
  *return view('producto_editar',['producto'=>$producto]); */

}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
   /**  $producto=Producto::findOrFail($id);
    *$producto->nombre = $request->nombre;
    *$producto->precio = $request->apellido;
    *$producto->categoria = $request->direccion;
    *$producto->save();

    *$silla = Producto::all();
    *dd($variable);
    *return view('producto',['silla'=>$silla]); */

}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $producto = Producto::findOrfail($id);
    $producto->delete();
    $silla = Producto::all();
    //dd($variable);
    return view('producto',['silla'=>$silla]);

}
}

