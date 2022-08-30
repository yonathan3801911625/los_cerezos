<?php

namespace App\Http\Livewire;

use App\Models\Insumo;
use Livewire\Component;

class AgregarInsumoModal extends Component
{
    
    public $insumo;
    public $abrirModal = false;
    public $nombre = "";
    // public $unidad = "";
    // public $precio = "";
    // public $cantidad = "";
    // public $tipo = "";
    // public $fecha_vencimiento = "";

    public $idInsumo = null;

    
    public function mount($insumo)
    {
        // $this->fase = $fase;
        $this->insumo = $insumo;
    }


    public function render()
    {
        return view('livewire.agregar-insumo-modal');
    }

    public function save(){

    
    // 
    //     $insumo = new Insumo();
    //     $insumo->nombre = $this->nombre;
    //     $insumo->unidad = $this->unidad;
    //     $insumo->precio = $this->precio;
    //     $insumo->cantidad = $this->cantidad;
    //     $insumo->tipo = $this->tipo;
    //     $insumo->fecha_vencimiento = $this->fecha_vencimiento;
    //     $insumo->save();

    //     $this->abrirModal = false;
    }

    
}
