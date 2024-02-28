<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\Server(url="http://localhost:8000/api")
 * @OA\Info(
 *     title="Horizon - Bateria de Surf API",
 *     version="1.0",
 *     description="API desenvolvida para desafio técnico da Horizon, com o objetivo de fornecer resultados de competições de surf, onde foi solicitado a criação das seguintes funcionalidades: 
 * Inserir surfistas 
 * Obter todos os surfistas cadastrados 
 * Criar novas baterias 
 * Obter o vencedor de uma bateria
 * Cadastrar novas ondas em uma bateria 
 * Cadastrar novas notas em uma onda",
 *     @OA\Contact(
 *         email="lorenzomoreti@yahoo.com",
 *         name="Lorenzo Moreti"
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
