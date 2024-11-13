<?php


namespace App\Http\Controllers\Traits\Mounth;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


trait MounthGames
{
    // By Mounth
    public function wins_by_month()
    {

        $games =  PredictionByDate::select("*")
            ->whereBetween('date', 
                [
                    Carbon::now()->startOfMonth(), 
                    Carbon::now()->endOfMonth()
                ])
            ->where('status', 'won')
            ->get();

        // dd(count($games));
        
        
        return count($games);
    }


    public function losts_by_month()
    {

        $games =  PredictionByDate::select("*")
            ->whereBetween('date', 
                [
                    Carbon::now()->startOfMonth(), 
                    Carbon::now()->endOfMonth()
                ])
            ->where('status', 'lost')
            ->get();

        // dd(count($games));
        
        return count($games);
    }
}