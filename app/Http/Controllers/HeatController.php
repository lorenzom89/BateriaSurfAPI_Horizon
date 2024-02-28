<?php

namespace App\Http\Controllers;

use App\Models\Heat;
use App\Models\Wave;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Baterias",
 *     description="API Endpoint - Baterias",
 * )
 */
class HeatController extends Controller {
    /**
     * @OA\Post(
     *     path="/baterias",
     *     summary="Criar uma nova Bateria",
     *     tags={"Baterias"},
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="fk_surfer_a", type="integer", format="int64"),
     *             @OA\Property(property="fk_surfer_b", type="integer", format="int64"),
     *         )
     *     ),
     *     @OA\Response(response=201, description="Created"),
     *     @OA\Response(response=400, description="Bad Request"),
     * )
     */
    public function store(Request $request) {
        $data = $request->validate([
            'fk_surfer_a' => 'required|exists:surfers,id',
            'fk_surfer_b' => 'required|exists:surfers,id',
        ]);

        $heat = Heat::create($data);

        return response()->json($heat, 201);
    }


    /**
     * @OA\Get(
     *     path="/baterias/{bateriaId}/vencedor",
     *     summary="Obter vencedor da bateria",
     *     tags={"Baterias"},
     *     @OA\Parameter(name="bateriaId", in="path", required=true, description="ID da Bateria", @OA\Schema(type="integer", format="int64")),
     *     @OA\Response(response=200, description="OK"),
     *     @OA\Response(response=404, description="Not Found"),
     * )
     */
    public function getWinner($heatId) {
        $heat = Heat::find($heatId);
        $wavesList = Wave::where('fk_heat',$heat->id)->get();
        
        $winner = null;
        $highestTotalScore = 0;
    
    
        foreach ($heat->surfers as $surfer) {
            $waves = $wavesList->where('fk_surfer', $surfer->id);          
            $wavesScores = [];

            foreach ($waves as $wave) {
                $waveTotalScore = ($wave->scores->sum('partialScore1') + $wave->scores->sum('partialScore2') + $wave->scores->sum('partialScore3')) / 3;
                $wavesScores[] = $waveTotalScore;
            }

            arsort($wavesScores);
            $totalScores = array_sum(array_slice($wavesScores, 0, 2));

            if ($totalScores > $highestTotalScore) {
                $highestTotalScore = $totalScores;
                $winner = $surfer;
            }
        }
    
        return response()->json($winner, 200);
    }
    
}
