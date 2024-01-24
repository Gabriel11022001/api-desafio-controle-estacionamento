<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca')
                ->nullable(false);
            $table->string('modelo')
                ->nullable(false);
            $table->string('cor')
                ->nullable(false);
            $table->string('placa')
                ->nullable(false)
                ->unique('placa_veiculo_unique_id');
            $table->unsignedBigInteger('tipo_veiculo_id')
                ->nullable(false);
            $table->foreign('tipo_veiculo_id')
                ->references('id')
                ->on('tipo_veiculos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
};
