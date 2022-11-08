<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
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
        $Usuarios=Usuarios::all();
        return view('admin.usuarios.index', compact('Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Usuarios = new Usuarios;
            $Usuarios->Nombre_U=$request->Nombre_U;
            $Usuarios->Apellido_P=$request->Apellido_p;
            $Usuarios->Apellido_M=$request->Apellido_M;
            $Usuarios->Telefono=$request->Telefono;
            $Usuarios->Email=$request->Email;
            $Usuarios->Contraseña=bcrypt($request->Contraseña);

        $Usuarios->save();

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
    public function edit($id)
    {
        $Usuarios = Usuarios::findOrFail($id);
        return view('admin.usuarios.edit', compact('Usuarios'));
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
        $Usuarios=Usuarios::findOrFail($id);
            $Usuarios->Nombre_U=$request->Nombre_U;
            $Usuarios->Apellido_P=$request->Apellido_p;
            $Usuarios->Apellido_M=$request->Apellido_M;
            $Usuarios->Telefono=$request->Telefono;
            $Usuarios->Email=$request->Email;
            $Usuarios->Contraseña=bcrypt($request->Contraseña);
        $Usuarios->save();

    return redirect()->route('usuario.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Usuarios=Usuarios::findOrFail($id);
        $Usuarios->delete();
        return redirect()->route('usuario.index');
    }
}
