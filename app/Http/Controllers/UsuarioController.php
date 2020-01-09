<?php

namespace App\Http\Controllers;

use App\Usuario;
use CreateUsuariosTable;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Usuario::paginate(10);

        $datosNacionalidadArg = Usuario::where('Nacionalidad','=','Argentina')->count();
        $datosNacionalidadBra = Usuario::where('Nacionalidad','=','Brasil')->count();
        $datosNacionalidadBol = Usuario::where('Nacionalidad','=','Bolivia')->count();
        $datosNacionalidadChi = Usuario::where('Nacionalidad','=','Chile')->count();
        $datosNacionalidadPar = Usuario::where('Nacionalidad','=','Paraguay')->count();
        $datosNacionalidadUru = Usuario::where('Nacionalidad','=','Uruguay')->count();
       
        return view('usuarios.index')
        ->with('usuarios', $datos)
        ->with('cantArg',$datosNacionalidadArg)
        ->with('cantBra',$datosNacionalidadBra)
        ->with('cantBol',$datosNacionalidadBol)
        ->with('cantChi',$datosNacionalidadChi)
        ->with('cantPar',$datosNacionalidadPar)
        ->with('cantUru',$datosNacionalidadUru);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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
        $datosUsuario = request()->except('_token');

        
        Usuario::insert($datosUsuario);

        return redirect('usuarios');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = Usuario::findOrFail($id);

        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()->except('_token','_method');
        Usuario::where('id','=',$id)->update($datosUsuario);

        return redirect('usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuario::destroy($id);

        return redirect('usuarios');
    }
}
