<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')
                ->nullable(false)
                ->unique('nome_estabelecimento_unique_id')
                ->max(255);
            $table->string('cnpj')
                ->nullable(false)
                ->unique('cnpj_estabelecimento_unique_id')
                ->max(255);
            $table->text('endereco')
                ->nullable(false);
            $table->string('telefone')
                ->nullable(false)
                ->unique('telefone_estabelecimento_unique_id')
                ->max(255);
            $table->integer('quantidade_vagas_carros')
                ->nullable(false);
            $table->integer('quantidade_vagas_motos')
                ->nullable(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
};
