<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use Livewire\Component;

class AgregarActividadModal extends Component
{
    
    public $actividad;
    public bool $abrirModal = false;
    public $nombre = "";
    public $idActividad = null;

    // esto sera para calcular costos dentro del componente 
    public $cantidad;
    public $precio_movimiento = 0;
    public $tipo_movimiento = "salida";
    public $msg = "";

    public function mount()
    {
        // $this->fase = $fase;
        $this->getActividads();
    }

    public function render()
    {
        return view('livewire.agregar-actividad-modal');
    }

    public function getActividads()
    {
        // $this->fase = $fase;
        $this->actividad = Actividad::all();
    }
    public function onChangeActividad()
    {
        // $this->fase = $fase;
        $this->actividadSelected = $this->actividads[$this->KeyActividadSelected];
        if(!$this->tipoActividad){
            $this->checkCantidad();
        }
    }


    

    public function toggleMoviento()
    {
        if ($this->tipo_movimiento == "salida") {
            $this->tipo_movimiento = "entrada";
        } else {
            $this->tipo_movimiento = "salida";
        }
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
            $this->cantidad > $this->actividad->cantidad
        ) {
            $this->msg = "La cantidad ingresada supera el inventario";
            return;
        }

        if ($this->tipo_movimiento == "salida" && $this->cantidad > 0) {
            $this->precio_movimiento = $this->cantidad * $this->actividad->precio;
        }
    }

    public function save()
    {
        $cantidad_acutalizada = 0;



        if ($this->tipo_movimiento == "salida") {
            if ($this->cantidad > $this->actividad->cantidad) {
                $this->msg = "La cantidad ingresada supera el inventario";
                return;
            }

            $cantidad_acutalizada = $this->actividad->cantidad - $this->cantidad;
        } else {
            $cantidad_acutalizada = $this->actividad->cantidad + $this->cantidad;
        }

        $this->actividad->cantidad = $cantidad_acutalizada;

        $this->actividad->update();

        $this->msg = "";



        $actividad = new actividad();
        $actividad->cantidad = $this->cantidad;
        $actividad->tipo = $this->tipo_movimiento;
        $actividad->actividad_id = $this->actividad->id;
        $actividad->precio = $this->precio_movimiento;

        $actividad->save();

        $this->cantidad = 0;
        $this->precio_movimiento = 0;

        session()->flash('flash.banner', "Actividad e inventario registrado");

        $this->openModal = !$this->openModal;
    }
    
}
