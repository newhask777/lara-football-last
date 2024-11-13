<?php

namespace App\Http\Controllers\Front\Predictions\Stats;

use App\Http\Controllers\AppController;
use App\Http\Controllers\Controller;
use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DayStatsController extends AppController{

    public function __invoke(Request $request, $date)
    {
        $games = DB::table('predictions_by_dates')
            ->select('*')
            ->where('date', $date)
            ->get();

        $tournaments = DB::table('predictions_by_dates')
            ->select('competition_cluster','competition_name', 'federation')
            ->where('date', $date)
            ->distinct('competition_cluster')
            ->distinct('competition_name')
            ->distinct('federation')
            ->get();

        $federations = DB::table('predictions_by_dates')
            ->select('federation')
            ->where('date', $date)
            ->distinct('federation')
            ->get();

        $countries = DB::table('predictions_by_dates')
            ->select('competition_cluster', 'status')
            ->where('date', $date)
            ->distinct('competition_cluster')
            ->get();

        $leagues = DB::table('predictions_by_dates')
            ->select('competition_name', 'competition_cluster')
            ->where('date', $date)
            ->distinct('competition_name')
            ->distinct('competition_cluster')
            ->get();


        $won_results = DB::table('predictions_by_dates')
            ->select(['competition_cluster', DB::raw('count(status) AS wons_count')])
            ->where([['date', $date], ['status', 'won']])
            ->groupBy('competition_cluster')
            // ->orderBy('countries_count', 'desc')
            ->get();

            

        dump($won_results);

        $wins =  $this->win_games_count($games);
        $losts =  $this->lost_games_count($games);

        $wins_mounth = $this->wins_by_month();
        $losts_mounth = $this->losts_by_month();

        $wins_by_fede = $this->wins_by_federation_day($games, $date);
        $losts_by_fede = $this->losts_by_federation_day($games, $date);

        $wins_by_fede_caf = $this->wins_by_federation_day_caf($games, $date);
        $losts_by_fede_caf = $this->losts_by_federation_day_caf($games, $date);

        $wins_by_fede_afc = $this->wins_by_federation_day_afc($games, $date);
        $losts_by_fede_afc = $this->losts_by_federation_day_afc($games, $date);

        $wins_by_fede_concacaf = $this->wins_by_federation_day_concacaf($games, $date);
        $losts_by_fede_concacaf = $this->losts_by_federation_day_concacaf($games, $date);

        $wins_by_fede_conmebol = $this->wins_by_federation_day_conmebol($games, $date);
        $losts_by_fede_conmebol = $this->losts_by_federation_day_conmebol($games, $date);

        $countries_wins = [];
        $countries_losts= [];

        


        $temp = 'stats';
        $type = 'stats';

        $currentDate = $date;

        // dd($countries);

        return view('stats.day_stats', [
            'games' => $games,
            'temp' => $temp,
            'type' => $type,
            'tournaments' => $tournaments,
            'federations' => $federations,
            'countries' => $countries,
            'leagues' => $leagues,
            'date' => $currentDate,
            'request' => $request,
            'wins' => $wins,
            'losts' => $losts,
            'wins_mounth' => $wins_mounth,
            'losts_mounth' => $losts_mounth,
            'wins_day_fede' => $wins_by_fede,
            'losts_day_fede' => $losts_by_fede,
            'wins_by_fede_caf' => $wins_by_fede_caf,
            'losts_by_fede_caf' => $losts_by_fede_caf,
            'wins_by_fede_afc' => $wins_by_fede_afc,
            'losts_by_fede_afc' => $losts_by_fede_afc,
            'wins_by_fede_concacaf' => $wins_by_fede_concacaf,
            'losts_by_fede_concacaf' => $losts_by_fede_concacaf,
            'wins_by_fede_conmebol' => $wins_by_fede_conmebol,
            'losts_by_fede_conmebol' => $losts_by_fede_conmebol,
            'won_results' => $won_results,
            // 'losts_by_country_day' => $losts_by_country_day,
            // 'countries_wins' => $countries_wins,
            // 'countries_losts' => $countries_losts

        ]);
    }

}