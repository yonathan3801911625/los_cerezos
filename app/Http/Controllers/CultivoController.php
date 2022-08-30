<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Cultivo;
use App\Models\Fase;
use App\Models\Insumo;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(get_class_methods('App\Http\Controllers\CultivoController'));
        return view("cultivos.index", ["cultivos" => Cultivo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cultivos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cultivo = new Cultivo();

        $cultivo->nombre  = $request->nombre;
        $cultivo->fecha_inicio  = $request->fecha_inicio;
        $cultivo->fecha_cosecha  = $request->fecha_cosecha;
        $cultivo->area_terreno  = $request->area_terreno;
        $cultivo->densidad  = $request->densidad;
        $cultivo->tipo  = $request->tipo;
        $cultivo->save();

        // $fase = new Fase();

        // $fase->nombre  = $request->nombre;
        // $fase->save();

        // $cultivo->fases()->attach($fase);

        session()->flash(
            'flash.banner',
            "Creado"
        );

        return Redirect::route("cultivos.edit", $cultivo);

        // return Redirect::route("cultivos.edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function show(Cultivo $cultivo)
    {
        return view('cultivos.ver', compact('cultivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultivo $cultivo)
    {
        // $cultivo = Cultivo::all();
        // $insumo = Insumo::all();
        // $actividad = Actividad::all();
        // return view('cultivos.edit', compact("insumo", 'actividad', 'cultivo'));
        return view("cultivos.edit", [
            "cultivo" => $cultivo,
            "actividad" => Actividad::all(),
            "fases" => Fase::all(),
            "insumo" => Insumo::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cultivo $cultivo)
    {
        $faseExists =  DB::table('cultivo_fase')
            ->where('fase_id', $request->fase)
            ->where('cultivo_id', $cultivo->id)
            ->get();

        // dd($faseExists);
        // echo count($faseExists);
        if (count($faseExists) <= 0) {
            $fase = Fase::findOrFail($request->fase);
            $cultivo->fases()->attach($fase);
        }
        else{
            session()->flash("flash.banner","No se puede agregar fase por que esta ya se encuentra creada");
        }
        // die;

        return Redirect::route("cultivos.edit", $cultivo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cultivo $cultivo)
    {
        //
    }


    public function destroyCultivoFase(Request $request)
    {
        //
        // dd($request);
        // dd( $request->cultivo_fase);
        $cultivo_fase = json_decode($request->cultivo_fase);
        // dd( $cultivo_fase);
        // die;
        DB::table('cultivo_fase')->where('fase_id', $cultivo_fase->fase_id)
            ->where('cultivo_id', $cultivo_fase->cultivo_id)->delete();
        return Redirect::route("cultivos.edit", $cultivo_fase->cultivo_id);
    }
}
