<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trabajadores;
use DB;
//use Input;

class trabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajadores::all();
        return view('trabajadores',['trabajadores'=>$trabajadores]);
        return view('trabajadores')->with('trabajadores',$trabajadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajadoresCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajador = new Trabajadores($request->all());
        
        $fotoF = $request['foto'];
        
        $pic = $fotoF->getClientOriginalName();
        $picExt = $fotoF->getClientOriginalExtension();
        
        $new_name = md5(microtime(true)).".".$picExt;
        
        $trabajador->foto = "img/".$new_name;
        \Storage::disk('local')->put($new_name, \File::get($fotoF));
        
        
        $trabajador->save();
        return redirect('/trabajadores');
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
        $trabajador = Trabajadores::where("id", $id)->get();
        return view('trabajadoresEdit')->with('trabajador',$trabajador);
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
        $data = $request->all();
        $trabajador = Trabajadores::find($id);
        
        $trabajador->nombres = $data['nombres'];
        $trabajador->apellidos = $data['apellidos'];
        $trabajador->inss = $data['inss'];
        $trabajador->civil = $data['civil'];
        $trabajador->telefono = $data['telefono'];
        $trabajador->cedula = $data['cedula'];
        $trabajador->tipo = $data['tipo'];
        $trabajador->cargo = $data['cargo'];
        $trabajador->genero = $data['genero'];
        
        $trabajador->save();
        return redirect('/trabajadores');
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
