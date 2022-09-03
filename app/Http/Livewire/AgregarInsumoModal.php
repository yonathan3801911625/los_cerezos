<?php

namespace App\Http\Livewire;

use App\Models\Insumo;
use Livewire\Component;

class AgregarInsumoModal extends Component
{
    
    public $insumo;
    public bool $abrirModal = false;
    public $nombre = "";
    public $unidad = "";
    // public $precio = "";
    public $cantidad;
    // public $tipo = "";
    // public $fecha_vencimiento = "";

    public $idInsumo = null;
    public $precio_movimiento = 0;
    public $tipo_movimiento = "salida";
    public $msg = "";

    
    public function mount($insumo)
    {
        // $this->fase = $fase;
        $this->insumo = $insumo;
    }

    public function toggleMoviento()
    {
        if ($this->tipo_movimiento == "salida") {
            $this->tipo_movimiento = "entrada";
        } else {
            $this->tipo_movimiento = "salida";
        }
    }


    public function render()
    {
        return view('livewire.agregar-insumo-modal');
    }

    public function updatePrice()
    {

        $this->msg = "";

        if ($this->tipo_movimiento != "salida") {
            $this->msg = "";
            return;
        }

        if ($this->cantidad == "") {
            $this->precio_movimiento = 0;
        }

        if (
            $this->cantidad > $this->insumo->cantidad
        ) {
            $this->msg = "La cantidad ingresada supera el inventario";
            return;
        }

        if ($this->tipo_movimiento == "salida" && $this->cantidad > 0) {
            $this->precio_movimiento = $this->cantidad * $this->insumo->precio;
        }
    }

    public function save()
    {
        $cantidad_acutalizada = 0;



        if ($this->tipo_movimiento == "salida") {
            if ($this->cantidad > $this->insumo->cantidad) {
                $this->msg = "La cantidad ingresada supera el inventario";
                return;
            }

            $cantidad_acutalizada = $this->insumo->cantidad - $this->cantidad;
        } else {
            $cantidad_acutalizada = $this->insumo->cantidad + $this->cantidad;
        }

        $this->insumo->cantidad = $cantidad_acutalizada;

        $this->insumo->update();

        $this->msg = "";



        $movement = new Insumo();
        $movement->cantidad = $this->cantidad;
        $movement->tipo = $this->tipo_movimiento;
        $movement->insumo_id = $this->insumo->id;
        $movement->precio = $this->precio_movimiento;

        $movement->save();

        $this->cantidad = 0;
        $this->precio_movimiento = 0;

        session()->flash('flash.banner', "Moviemientod e inventario registrado");

        $this->abrirModal = !$this->abrirModal;
    }


    // public function save(){

    
    // // 
    // //     $insumo = new Insumo();
    // //     $insumo->nombre = $this->nombre;
    // //     $insumo->unidad = $this->unidad;
    // //     $insumo->precio = $this->precio;
    // //     $insumo->cantidad = $this->cantidad;
    // //     $insumo->tipo = $this->tipo;
    // //     $insumo->fecha_vencimiento = $this->fecha_vencimiento;
    // //     $insumo->save();

    // //     $this->abrirModal = false;
    // }

    // public function updatePrice()
    // {

    // }
}
