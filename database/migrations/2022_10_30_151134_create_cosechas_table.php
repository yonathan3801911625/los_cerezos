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
        Schema::create('cosechas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cultivo_id"); //Se cambia la funcion foreignId por unsingedByig... para la eliminacion en cascada ... Norberto Salazar Brito
            $table->foreign("cultivo_id")->references('id')->on('cultivos')->cascadeOnDelete(); //Se agrega el cascadeOnDelete para eliminar el cultivo y automaticamente tambien elmine la fase
            $table->date('fecha');
            $table->integer("cantidad");
            $table->foreignId("user_id")->constrained();
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
        Schema::dropIfExists('cosechas');
    }
};
