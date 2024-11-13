<?php


namespace App\Http\Controllers\Traits\Today;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


trait TodayCountriesGames
{
    public function wins_by_country_day($games, $country, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['competition_cluster', $country],['status', 'won']])
            ->get();
         
        return count($games);
    }

    public function losts_by_country_day($games, $country, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['competition_cluster', $country],['status', 'lost']])
            ->get();
         
        return count($games);
    }
}