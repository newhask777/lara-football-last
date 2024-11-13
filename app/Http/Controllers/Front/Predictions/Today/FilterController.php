<?php

namespace App\Http\Controllers\Front\Predictions\Today;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController
{
    public function  __invoke(Request $request)
    {
        $games = PredictionByDate::query();

        $games->when(request('search'), function ($query){
//            $query->where(function($query){
//                $query->where('date', 'like', '%' . request('date') . '%')
//                    ->orWhere('away_team', 'like', '%' . request('search') . '%')
//                    ->orWhere('federation', 'like', '%' . request('search') . '%')
//                    ->orWhere('competition_cluster', 'like', '%' . request('search') . '%')
//                    ->orWhere('competition_name', 'like', '%' . request('search') . '%');
//            });
        })->when(request('min_coef'), function($query){
            $query->where('coefficient', '>=', request('min_coef'));
        })->when(request('max_coef'), function($query){
            $query->where('coefficient', '<=', request('max_coef'));
        })->when(request('status'), function ($query){
            $query->where('status', request('status'));
        })->when(request('date'), function ($query){
            $query->where('date', request('date'));
        })->when(request('prediction'), function ($query){
            $query->where('prediction', request('prediction'));
        });

        $games = $games->get();

        $tournaments = [];
        $federations = [];
        $game_info = [];

        foreach ($games as $game)
        {
            $game_info['competition_name'] = $game->competition_name;
            $game_info['competition_cluster'] = $game->competition_cluster;
            $game_info['federation'] = $game->federation;
            $game_info['date'] = $game->date;
            array_push($tournaments, $game_info);
            $tournaments = array_unique($tournaments, SORT_REGULAR);
            unset($game_info);
        }

// dump($tournaments);


        $federations = DB::table('predictions_by_dates')
            ->select('federation')
            ->where('date', request('date'))
            ->distinct('federation')
            ->get();


        $countries = DB::table('predictions_by_dates')
            ->select('competition_cluster')
            ->where('date', request('date'))
            ->distinct('competition_cluster')
            ->get()->toArray();


        $leagues = DB::table('predictions_by_dates')
            ->select('competition_name', 'competition_cluster')
            ->where('date', request('date'))
            ->distinct('competition_name')
            ->distinct('competition_cluster')
            ->get();


        $dates = PredictionByDate::select('date')
            ->distinct('date')
            ->get();

        
        dump($request);

        $temp = 'filter';
        $type = 'filter';

        $currentDate = date('Y-m-d');

        return view('predictions.main', [
            'games' => $games,
            'temp' => $temp,
            'type' => $type,
            'tournaments' => $tournaments,
            // 'federations_f' => $federations_f,
            'federations' => $federations,
            'countries' => $countries,
            'leagues' => $leagues,
            'date' => $currentDate,
            'dates' => $dates,
            'request' => $request
        ]);
    }
}
