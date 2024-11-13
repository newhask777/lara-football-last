<?php


namespace App\Http\Controllers\Traits\Today;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


trait TodayFederationsGames
{

    // UEFA
    public function wins_by_federation_day($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['federation', 'UEFA'],['status', 'won']])
            ->get();

        //dd(count($games));
        
        return count($games);
    }

    public function losts_by_federation_day($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where('date', $date)
            ->where('federation', 'UEFA')
            ->where('status', 'lost')
            ->get();

        // dump(count($games));
        
        return count($games);
    }


    // CAF

    public function wins_by_federation_day_caf($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['federation', 'CAF'],['status', 'won']])
            ->get();

        //dd(count($games));
        
        return count($games);
    }

    public function losts_by_federation_day_caf($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where('date', $date)
            ->where('federation', 'CAF')
            ->where('status', 'lost')
            ->get();

        // dump(count($games));
        
        return count($games);
    }


     // AFC

     public function wins_by_federation_day_afc($games, $date)
     {
         $games =  PredictionByDate::select("*")
             ->where([['date', $date],['federation', 'AFC'],['status', 'won']])
             ->get();
 
         //dd(count($games));
         
         return count($games);
     }
 
     public function losts_by_federation_day_afc($games, $date)
     {
         $games =  PredictionByDate::select("*")
             ->where('date', $date)
             ->where('federation', 'AFC')
             ->where('status', 'lost')
             ->get();
 
         // dump(count($games));
         
         return count($games);
     }


    // CONCACAF

    public function wins_by_federation_day_concacaf($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['federation', 'CONCACAF'],['status', 'won']])
            ->get();

        //dd(count($games));
        
        return count($games);
    }

    public function losts_by_federation_day_concacaf($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where('date', $date)
            ->where('federation', 'CONCACAF')
            ->where('status', 'lost')
            ->get();

        // dump(count($games));
        
        return count($games);
    }

    // CONMEBOL

    public function wins_by_federation_day_conmebol($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where([['date', $date],['federation', 'CONMEBOL'],['status', 'won']])
            ->get();

        //dd(count($games));
        
        return count($games);
    }

    public function losts_by_federation_day_conmebol($games, $date)
    {
        $games =  PredictionByDate::select("*")
            ->where('date', $date)
            ->where('federation', 'CONMEBOL')
            ->where('status', 'lost')
            ->get();

        // dump(count($games));
        
        return count($games);
    }
}