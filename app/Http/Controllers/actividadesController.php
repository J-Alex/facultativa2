<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Actividad;
use App\Finca;
use DB;
class actividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades',['actividades'=>$actividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fincas = Finca::all();
        return view('actividadesCreate')->with('fincas',$fincas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Actividad($request->all());
        $actividad->save();
        return redirect('/actividades');
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
        //$actividad = Actividad::where("id", $id)->leftjoin('fincas', 'actividades.idfinca', '=', 'fincas.idselect')->get();
        /*$actividad = DB::table('actividades')
                        ->where("id","=",$id)
                        ->get();*/
        $actividad = Actividad::where("id", $id)->get();
        $Fincas = Finca::all();
        
        $finca = Finca::where("id",$actividad[0]->idfinca)->get();
        $actividad[0]->nombreFinca = $finca[0]->nombre;
        
        //return $actividad;
        return view('actividadesEdit')->with(['actividad'=>$actividad, 'fincas'=>$Fincas]);
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
        $actividad = Actividad::find($id);
        
        $actividad->nombre = $data['nombre'];
        $actividad->idfinca = $data['finca'];
        
        $actividad->save();
        return redirect('/actividades');
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
