<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Notas",
 *     description="API Endpoint - Notas",
 * )
 */

class ScoreController extends Controller {
    /**
     * @OA\Post(
     *     path="/notas",
     *     summary="Adicionar Notas para uma Onda",
     *     tags={"Notas"},
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="fk_wave", type="integer", format="int64"),
     *             @OA\Property(property="partialScore1", type="number"),
     *             @OA\Property(property="partialScore2", type="number"),
     *             @OA\Property(property="partialScore3", type="number"),
     *         )
     *     ),
     *     @OA\Response(response=201, description="Created"),
     *     @OA\Response(response=400, description="Bad Request"),
     * )
     */
    public function store(Request $request) {
        $data = $request->validate([
            'fk_wave' => 'required|exists:waves,id',
            'partialScore1' => 'required|numeric',
            'partialScore2' => 'required|numeric',
            'partialScore3' => 'required|numeric',
        ]);

        $score = Score::create($data);

        return response()->json($score, 201);
    }
}