<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CostoAdicionalController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\MovimientoController;
use App\Http\Livewire\AgregarCostosModal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified"
])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
    Route::resource("/cultivos", CultivoController::class);
    Route::post("/cultivos/reporte/{cultivo}", [CultivoController::class, "reporte"])->name("cultivos.reporte");
    Route::put("/cultivos/updateCultivo/{cultivo}", [CultivoController::class, "updateCultivo"])->name("cultivos.updateCultivo");

    Route::get("/cultivos/extras/{cultivo}", [CultivoController::class, 'extras'])->name("cultivos.extras");
    Route::resource("/fases", FaseController::class);
    Route::resource("/costos", CostoAdicionalController::class);

    Route::resource("/actividades", ActividadController::class);
    Route::resource("/insumos", InsumoController::class);
    Route::resource("/movimientos", MovimientoController::class);

    Route::resource("/actividads", ActividadController::class);
    Route::resource("/insumos", InsumoController::class);
    Route::post("/destroy_cultivo_fase", [CultivoController::class, 'destroyCultivoFase'])->name("destroyCultivoFase");
    // Route::get("/editar", [CultivoController::class, 'cultivos.editar'])->name("editar");
    Route::resource("/livewire", AgregarCostosModal::class);
});
