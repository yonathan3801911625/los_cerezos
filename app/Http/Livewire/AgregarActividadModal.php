<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class AgregarActividadModal extends Component
{

    public bool $abrirModal = false;

    public $cultivo = null;
    public $actividads = null;
    public $keyActividadSelected;
    public $actividadSelected;

    public $cantidad = 0;
    public $cantidadMaxima = 10;
    public bool $disableForm = true;
    public bool $tipoMovimiento = true;
    public $valor = 0;

    public function mount()
    {
        $this->getActividads();
    }

    public function render()
    {
        return view('livewire.agregar-actividad-modal');
    }

    public function getActividads()
    {
        $this->actividads = Actividad::all();
    }

    public function onChangeActividad()
    {
        $this->actividadSelected = $this->actividads[$this->keyActividadSelected];
        if(!$this->tipoMovimiento) {
            $this->checkCantidad();
        }
    }

    public function updatePrice() {
        $this->valor = (int)$this->cantidad * (int)$this->actividadSelected->valor;
    }

    public function setTipoMovimiento($bool)
    {
        $this->tipoMovimiento = $bool;
        if(!$this->tipoMovimiento) {
            $this->checkCantidad();
        }
    }

    public function checkCantidad() {
        if($this->cantidad > $this->actividadSelected->cantidad) {
            $this->cantidad = $this->actividadSelected->cantidad;
        }
    }

   

    public function save()
    {
        DB::table('insumo_actividad')->insert(
            [
                'actividad_id' => $this->actividadSelected->id,
                
                'cantidad' => $this->cantidad,
                'user_id' => Auth::user()->id
            ]
        );
        
        
       
    }
    
}
