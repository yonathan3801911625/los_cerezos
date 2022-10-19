<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AgregarCostosModal extends Component
{
    public $disableForm;
    public bool $abrirModal = false;
    public $fecha;
    public $precio;
    public $descripcion;
    public $costo;

    // public function mount()
    // {
    //      $this->getCostos();
    // }

    public function render()
    {
        return view('livewire.agregar-costos-modal');
    }

    // public function getCostos()
    // {
    //     $this->costos = CostoAdicional::all();
    // }
    public function save()
    {
        $this->disableForm = false;
        DB::table('costo_adicionals')->insert(
            [
                'fecha' => $this->fecha,
                'precio' => $this->precio,
                'descripcion' => $this->descripcion,

            ]


        );
        $this->resetForm();
    }

    public function resetForm() {
        $this->fecha = null;
        $this->precio = 0;
        $this->descripcion = null;
    }


    // public function insert(Request $request){
    //     $fecha = $request->input('fecha');
    //     $precio = $request->input('precio');
    //     $descripcion = $request->input('descripcion');
    //     $data=array('fecha'=>$fecha,"precio"=>$precio,"descripcion"=>$descripcion);
    //     DB::table('costo_adicionals')->insert($data);
    //     echo "Costo Adicional creado exitosamente.<br/>";
    //     }

    // public function store(Request $request , AgregarCostosModal $costo)
    // {
    //     // $costo->id=$request->id;
    //     $costo->fecha=$request->fecha;
    //     $costo->precio=$request->precio;
    //     $costo->descripcion=$request->descripcion;

    //     $costo->save();
    //     session()->flash("flash.banner","Costo creado de manera satisfactoria");
    //     return Redirect::route('costos.index');
    // }
}
