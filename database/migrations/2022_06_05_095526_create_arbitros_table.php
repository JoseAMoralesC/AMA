<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->date('fec_nac');
            $table->string('nacionalidad')->nullable();
            $table->string('email');
            $table->string('telefono')->nullable();
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
        Schema::dropIfExists('arbitros');
    }
}
