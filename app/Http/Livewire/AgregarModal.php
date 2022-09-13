<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use App\Models\Insumo;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class AgregarModal extends Component
{
    public bool $abrirModal = false;
    public $keyInsumoSelected;
    public $insumoSelected;
    public $insumo;

    public function mount()
    {
        $this->getInsumos();
    }

    public function getInsumos()
    {
        $this->insumos = Insumo::all();
    }

    
    public function render()
    {
        return view('livewire.agregar-modal');
    }
}
