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
        Schema::create('_add__supply', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("unidad");
            $table->integer("precio");
            $table->integer("cantidad");
            $table->string("tipo");
            $table->date("fecha_vencimiento");
            $table->string("responsable");
            $table->foreignId("actividad_id")->constrained();
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
        Schema::dropIfExists('_add__supply');
    }
};
