<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use App\Models\Fase;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class AgregarActividadModal extends Component
{

    public $actividad;
    public $abrirModal = false;
    public $nombre = "";
    // public $estado = "pendiente";
    // public $valor = "";

    public $idActividad = null;

    // public $fase;
    // public $costos;

    public function mount($actividad)
    {
        // $this->fase = $fase;
        $this->actividad = $actividad;
    }

    
    public function add($costos)
    {
        // $this->costos = $costos;
    }

    public function render()
    {
        return view('livewire.agregar-actividad-modal');
    }

    public function save()
    {
        // $actividad = new Actividad();
        // $actividad->nombre = $this->nombre;
        // $actividad->estado = $this->estado;
        // $actividad->valor = $this->valor;

        // $actividad->save();

        // // $actividad->fase()->attach($this->fase);
        // $actividad->costoAdicional()->attach($this->costos);

        // $this->nombre = "";
        // $this->estado = "pendiente";
        // $this->valor = "";

        // $this->abrirModal = false;
        
    }
    public function destroy(Fase $fase)
    {
        $fase= Fase::all();
        $fase->delete();
        return back()->with("flash.banner", "Fase eliminada de manera exitosa");
    }
    
}
