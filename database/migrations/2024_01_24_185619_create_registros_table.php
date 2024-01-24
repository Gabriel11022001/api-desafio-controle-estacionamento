<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_registro')
                ->nullable(false);
            $table->string('tipo')
                ->nullable(false)
                ->max(255);
            $table->unsignedBigInteger('estabelecimento_id')
                ->nullable(false);
            $table->unsignedBigInteger('veiculo_id')
                ->nullable(false);
            $table->foreign('estabelecimento_id')
                ->references('id')
                ->on('estabelecimentos');
            $table->foreign('veiculo_id')
                ->references('id')
                ->on('veiculos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registros');
    }
};
