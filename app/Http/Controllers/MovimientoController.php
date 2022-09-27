<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use App\Models\Insumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimiento::all();
        return view('movimientos.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumos = Insumo::all();
        return view('movimientos.create', compact('insumos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento();
        $insumo = insumo::find($request->insumo);  
        $movimiento->insumo_id = $request->insumo;
        $movimiento->tipoMovimiento = $request->tipoMovimiento;
        $movimiento->cantidad = $request->cantidad;
        $movimiento->valor = $request->valor;
        $movimiento->fecha = $request->fecha;
        if($request->tipomovimiento == "Salida"){
            $insumo->cantidad = $insumo->cantidad - $request->cantidad;
        }else{
            $insumo->cantidad = $insumo->cantidad + $request->cantidad;
        }
        $movimiento->valor = $request->valor;
        //$valortotal= $request->precio*$request->cantidad;


        $insumo->save();

        $movimiento->save();
        session()->flash("flash.banner","Movimiento realizado con exito");
        return Redirect::route("movimientos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        return view ('movimientos.edit', compact('movimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        $movimiento->insumo_id = $request->insumo;
        $movimiento->tipoMovimiento = $request->tipoMovimiento;
        $movimiento->cantidad = $request->cantidad;
        $movimiento->valor = $request->valor;
        $movimiento->fecha = $request->fecha;      

        $movimiento->save();
        session()->flash("flash.banner","Movimiento Creado Satisfatoriamente");
        return Redirect::route("movimientos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        $movimiento->delete();
        session()->flash("flash.banner","Insumo Eliminado Satisfatoriamente");
        return Redirect::route("productos.index");
    }
}
