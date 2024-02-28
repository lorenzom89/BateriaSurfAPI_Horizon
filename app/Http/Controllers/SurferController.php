<?php

namespace App\Http\Controllers;

use App\Models\Surfer;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Surfistas",
 *     description="API Endpoint - Surfistas",
 * )
 */

class SurferController extends Controller {

    /**
     * @OA\Post(
     *     path="/surfistas",
     *     summary="Inserir um novo surfista",
     *     tags={"Surfistas"},
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="country", type="string"),
     *         )
     *     ),
     *     @OA\Response(response=201, description="Created"),
     *     @OA\Response(response=400, description="Bad Request"),
     * )
     */
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'country' => 'required|string',
        ]);

        $surfer = Surfer::create($data);

        return response()->json($surfer, 201);
    }

    /**
    *  @OA\Get(
    *     path="/surfistas",
    *     summary="Listar todos os surfistas",
    *     tags={"Surfistas"},
    *     @OA\Response(response=200, description="OK"),
    * )
    */
    public function index() {
        $surfers = Surfer::all();
    
        return response()->json($surfers, 200);
    }
}
