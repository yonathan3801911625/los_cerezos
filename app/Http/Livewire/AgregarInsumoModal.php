<?php

namespace App\Http\Livewire;

use App\Models\Insumo;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Array_;

class AgregarInsumoModal extends Component
{

    public bool $abrirModal = false;


    public $insumos = null;
    public $keyInsumoSelected;
    public $insumoSelected;

    public $cantidad = 0;
    public $cantidadMaxima = 10;
    public bool $tipoMovimiento = true;
    public $precio = 0;

    public function mount()
    {
        // $this->fase = $fase;
        // $this->insumo = $insumo;
        $this->getInsumos();
    }

    public function render()
    {
        return view('livewire.agregar-insumo-modal');
    }

    public function getInsumos()
    {
        $this->insumos = Insumo::all();
    }

    public function onChangeInsumo()
    {
        $this->insumoSelected = $this->insumos[$this->keyInsumoSelected];
        if(!$this->tipoMovimiento) {
            $this->checkCantidad();
        }
    }

    public function updatePrice() {
        $this->precio = (int)$this->cantidad * (int)$this->insumoSelected->precio;
    }

    public function setTipoMovimiento($bool)
    {
        $this->tipoMovimiento = $bool;
        if(!$this->tipoMovimiento) {
            $this->checkCantidad();
        }
    }

    public function checkCantidad() {
        if($this->cantidad > $this->insumoSelected->cantidad) {
            $this->cantidad = $this->insumoSelected->cantidad;
        }
    }

   

    public function save()
    {
        
    }
        



    //     if ($this->tipo_movimiento == "salida") {
    //         if ($this->cantidad > $this->insumo->cantidad) {
    //             $this->msg = "La cantidad ingresada supera el inventario";
    //             return;
    //         }

    //         $cantidad_acutalizada = $this->insumo->cantidad - $this->cantidad;
    //     } else {
    //         $cantidad_acutalizada = $this->insumo->cantidad + $this->cantidad;
    //     }

    //     $this->insumo->cantidad = $cantidad_acutalizada;

    //     $this->insumo->update();

    //     $this->msg = "";



    //     $movement = new Insumo();
    //     $movement->cantidad = $this->cantidad;
    //     $movement->tipo = $this->tipo_movimiento;
    //     $movement->insumo_id = $this->insumo->id;
    //     $movement->precio = $this->precio_movimiento;

    //     $movement->save();

    //     $this->cantidad = 0;
    //     $this->precio_movimiento = 0;

    //     session()->flash('flash.banner', "Moviemientod e inventario registrado");

    //     $this->abrirModal = !$this->abrirModal;
    // }


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
