<?php

namespace App\Servico;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface IServico
{

    function cadastrar(Request $requisicao): JsonResponse;

    function buscarTodos(): JsonResponse;

    function buscarPeloId(int $id): JsonResponse;

    function editar(Request $requisicao): JsonResponse;

    function deletar(int $id): JsonResponse;
}