<?php

namespace App\Http\Controllers\Front\Predictions\Today;

use App\Http\Controllers\AppController;
use App\Http\Controllers\Controller;
use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PredictionsTodayController extends AppController
{
    public function __invoke(Request $request)
    {
        $games = Prediction::all();

        $tournaments = DB::table('predictions')
            ->select('competition_cluster','competition_name', 'federation')
            ->distinct('competition_cluster')
            ->distinct('competition_name')
            ->distinct('federation')
            ->get();

//        dump($tournaments);

        $federations = DB::table('predictions')
            ->select('federation')
            ->distinct('federation')
            ->get();

        $countries = DB::table('predictions')
            ->select('competition_cluster')
            ->distinct('competition_cluster')
            ->get();

        $leagues = DB::table('predictions')
            ->select('competition_name', 'competition_cluster')
            ->distinct('competition_name')
            ->distinct('competition_cluster')
            ->get();

//        dd($leagues);

        // $dates = PredictionByDate::select('date')
        //     ->distinct('date')
        //     ->get();

//        dd($dates);


        $temp = '$leagues';
        $type = 'today';

        $currentDate = date('Y-m-d');


        return view('predictions.main', [
            'games' => $games,
            'temp' => $temp,
            'type' => $type,
            'tournaments' => $tournaments,
            'federations' => $federations,
            'countries' => $countries,
            'leagues' => $leagues,
            'date' => $currentDate,
            // 'dates' => $dates,
            'request' => $request
        ]);
    }
}
