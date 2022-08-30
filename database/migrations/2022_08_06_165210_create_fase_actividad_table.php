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
        Schema::create('actividad_fase', function (Blueprint $table) {
            $table->id();
            $table->foreignId("fase_id")->constrained();
            $table->foreignId("actividad_id")->constrained();
            $table->foreignId("costoAdicional_id")->nullable()->constrained("costo_adicionals");
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
        Schema::dropIfExists('fase_actividad');
    }
};
