<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $silla = Categoria::all();
        //dd($variable);
        return view('categoria',['silla'=>$silla]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria=new Categoria($request->all());
        $categoria->save();

        $silla = Categoria::all();
//dd($variable);
        return view('categoria',['silla'=>$silla]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria=Categoria::findOrFail($id);
        return view('categoria_ver',['categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrfail($id);
        $categoria->delete();
        $silla = Categoria::all();
        //dd($variable);
        return view('categoria',['silla'=>$silla]);
    }
}
