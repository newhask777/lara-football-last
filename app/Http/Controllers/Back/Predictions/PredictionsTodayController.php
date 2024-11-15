<?php

namespace App\Http\Controllers\Back\Predictions;

use App\Http\Controllers\Controller;
use App\Models\Back\Prediction;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class PredictionsTodayController extends Controller
{
    public function __invoke()
    {
        // Prediction::query()->truncate();

        $response = Http::get('http://127.0.0.1:8001/api/predictions');
        $games = $response->json($key = null, $default = null);

//        dd($games);

        foreach ($games as $game)
        {
            Prediction::create([
                'event_id' => $game['event_id'],
                'competition_name' => $game['competition_name'],
                'competition_cluster' => $game['competition_cluster'],
                'federation' => $game['federation'],
                'season' => $game['season'],
                'date' => $game['date'],
                'start_date' => $game['start_date'],
                'time' => $game['time'],
                'home_team' => $game['home_team'],
                'away_team' => $game['away_team'],
                'status' => $game['status'],
                'result' => $game['result'],
                'prediction' => $game['prediction'],
                'coefficient' => $game['coofficient'],
                'is_expired' => $game['is_expired'],
                'odds' => $game['odds'],
            ]);
        }
    }
}
