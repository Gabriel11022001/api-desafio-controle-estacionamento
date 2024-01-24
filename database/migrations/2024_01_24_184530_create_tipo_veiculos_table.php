<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tipo_veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao')
                ->nullable(false)
                ->unique('descricao_tipo_veiculo_unique_id')
                ->max(255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_veiculos');
    }
};
