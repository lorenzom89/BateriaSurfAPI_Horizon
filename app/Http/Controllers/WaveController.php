<?php

namespace App\Http\Controllers;

use App\Models\Wave;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Ondas",
 *     description="API Endpoint - Ondas",
 * )
 */
class WaveController extends Controller {

    /**
     * @OA\Post(
     *     path="/ondas",
     *     summary="Cadastrar nova Onda",
     *     tags={"Ondas"},
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="fk_heat", type="integer", format="int64"),
     *             @OA\Property(property="fk_surfer", type="integer", format="int64"),
     *         )
     *     ),
     *     @OA\Response(response=201, description="Created"),
     *     @OA\Response(response=400, description="Bad Request"),
     * )
     */
    public function store(Request $request) {
        $data = $request->validate([
            'fk_heat' => 'required|exists:heats,id',
            'fk_surfer' => 'required|exists:surfers,id',
        ]);

        $wave = Wave::create($data);

        return response()->json($wave, 201);
    }
}
