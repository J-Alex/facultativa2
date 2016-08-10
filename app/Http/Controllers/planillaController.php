<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Trabajadores;
use App\Finca;
use App\Actividad;
use App\Quincenal;

class planillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$quince = Trabajadores::where('tipo','Super-Admi')->get();
        $quince = Quincenal::all();
        return view('planilla')->with('quinceT', $quince);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajadores = Trabajadores::all();
        $actividades = Actividad::all();
        $fincas = Finca::all();
        return view('planillaCreate')->with(['trabajadores'=>$trabajadores, 'fincas'=>$fincas, 'actividades'=>$actividades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salario_basico = 5000;
        
        $planilla = new Quincenal($request->all());
        
        $planilla->feriado = $planilla['diasFeriados'] * (($salario_basico*15)*2);
        $planilla->salario_base = $salario_basico;
        $planilla->tot_h_ext = $planilla['h_ext']*(($salario_basico/15)/8)*2;
        $planilla->septimo = $salario_basico/15;
        $planilla->devengado = $planilla['feriado'] + $planilla['salario_base'] + $planilla['tot_h_ext'] + $planilla['septimo'] + $planilla['otros'];
        $planilla->inss_lab = $planilla['devengado']*0.0625;
        $planilla->total_pagar = $planilla['devengado'] - $planilla['inss_lab'];
        $planilla->vacaciones = ($planilla['total_pagar'] - $planilla['tot_h_ext']) * 0.083333;
        $planilla->aguinaldo = $planilla['vacaciones'];
        
        return $planilla;
        $planilla->save();
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
    }
}
