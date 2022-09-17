<?php

namespace App\Http\Livewire;

use App\Models\Actividad;
use App\Models\Cultivo;
use App\Models\Fase;
use App\Models\Insumo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class VerCultivoFaseModal extends Component
{
    public bool $abrirModal = false;
    public $cultivo_fase_id;

    public $keyInsumoSelected;
    public $insumoSelected;
    public $insumo;
    public $fasesCultivo;

    public $movimientosInsumos;

    public function mount()
    {
        $this->getInsumos();
    }

    public function getInsumos()
    {
        $this->insumos = Insumo::all();
    }

    public function loadInsumos() {
        $this->movimientosInsumos =  DB::table('movimientos_insumos')
            ->select(
                'insumos.nombre as nombre_insumo',
                'movimientos_insumos.tipo as tipo_movimiento', 
                'movimientos_insumos.cantidad as cantidad_movimientos_insumos', 
                'insumos.precio as precio_insumo', 
                'movimientos_insumos.created_at as fecha_movimiento', 
            )
            ->where('cultivo_fase_id', $this->cultivo_fase_id)
            ->join('insumos', 'movimientos_insumos.insumo_id', '=', 'insumos.id')
            // ->select('fases.nombre as nombre_fase', 'cultivo_fase.created_at')
            // ->join('cultivos', 'cultivo_fase.cultivo_id', '=', 'cultivos.id')
            // ->join('fases', 'cultivo_fase.fase_id', '=', 'fases.id')
            ->get();
    }

    public function render()
    {   $this->loadInsumos();
        return view('livewire.ver-cultivo-fase-modal');
    }

    

    public function show()
    {
        

        // $faseActividad = DB::table('fase_actividad')
        // ->where('cultivo_id', $cultivo->id)
        // ->get();


        return view('cultivos.ver');
    }
}
