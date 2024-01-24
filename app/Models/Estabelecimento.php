<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'nome',
        'cnpj',
        'telefone',
        'endereco',
        'quantidade_vagas_carros',
        'quantidade_vagas_motos'
    ];
}
