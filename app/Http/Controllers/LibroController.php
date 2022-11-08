<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Libros=libros::all();
        return view('admin.libro.index', compact('Libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Libros = new libros;
            $Libros->Nombre_libro=$request->Nombre_libro;
            $Libros->editorial=$request->editorial;
            $Libros->genero=$request->genero;
            $Libros->No_paginas=$request->No_paginas;
            $Libros->Año_edicion=$request->Año_edicion;
            $Libros->cantidad=$request->cantidad;
            $Libros->ISBN=$request->ISBN;
        $Libros->save();

        return redirect()->route('libro.index');

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
    public function edit($id)
    {
        $Libros = libros::findOrFail($id);
        return view('admin.libro.edit', compact('Libros'));
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
        $Libros=libros::findOrFail($id);
            $Libros->Nombre_libro=$request->Nombre_libro;
            $Libros->editorial=$request->editorial;
            $Libros->genero=$request->genero;
            $Libros->No_paginas=$request->No_paginas;
            $Libros->Año_edicion=$request->Año_edicion;
            $Libros->cantidad=$request->cantidad;
            $Libros->ISBN=$request->ISBN;
        $Libros->save();

    return redirect()->route('libro.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Libros=libros::findOrFail($id);
        $Libros->delete();
        return redirect()->route('libro.index');
    }
}
