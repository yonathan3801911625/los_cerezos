<?php

namespace App\Http\Livewire;


use App\Models\Cultivo;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;



class AgregarCosechaModal extends Component
{

    public bool $disableForm = false;
    public bool $abrirModal = false;
    public $cultivo;
    public $fecha;
    public $cantidad;
    public $cosecha;

    public function getCultivo()
    {
        $this->cultivo = Cultivo::all();
    }

    public function render()
    {
     return view('livewire.agregar-cosecha-modal');
    }

    public function save()
    {
        $this->disableForm = false;

        $cosecha = DB::table('_cosecha')->insert(
            [

                'fecha' => $this->fecha,
                'cantidad' => $this->cantidad,
            ]
        );
        $this->resetForm();
    }

    public function resetForm() {
        $this->fecha = null;
        $this->precio = 0;
        $this->descripcion = null;
    }
    // public function viewCosecha(){
    //     $this->cosecha = DB::table('_cosecha')
    //     ->select(
    //         '_cosecha.fecha as fecha',
    //         '_cosecha.cantidad as cantidad',
    //     )
    //     ->join('cosecha', '_cosecha.id', '=', 'cosecha.id')
    //     ->get();
    // }

}
