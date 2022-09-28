<?php

namespace App\Http\Livewire;

use App\Models\CostoAdicional;
use Livewire\Component;

class AgregarCostosModal extends Component
{
    public $disableForm;
    public $costos;
    public bool $abrirModal = false;
    public $keyCostoSelected;
    public $costo;
    public $fase_actividad_id;

    // public function mount( $costo)
    // {
    //     $this->getCosto();
    // }

    public function render()
    {
        return view('livewire.agregar-costos-modal');
    }

    public function getCostos()
    {
        $this->costos = CostoAdicional::all();
    }
}
