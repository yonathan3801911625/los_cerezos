<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("insumo_id")->constrained();
            $table->date("fecha");
            $table->integer("cantidad");
            $table->boolean("tipo");
            $table->foreignId("user_id")->constrained();
            $table->string("observacion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos_insumos');
    }
};