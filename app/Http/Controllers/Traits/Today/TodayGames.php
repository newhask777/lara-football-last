<?php


namespace App\Http\Controllers\Traits\Today;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


trait TodayGames
{
    // By Day
    public function win_games_count($games)
    {
        $win_games_count = [];
 
        if(!empty($games)){
            // dump($games);
            foreach ($games as $game){
                if($game->status == 'won'){
 
                    array_push($win_games_count,$game);
 
                }
            }
        }
        return count($win_games_count);
    }

 
    public function lost_games_count($games)
    {
        $lost_games_count = [];
 
        if(!empty($games)){
            foreach ($games as $game){
                if($game->status == 'lost'){
 
                    array_push($lost_games_count,$game);
                    
                }
            }
        }
        return count($lost_games_count);
    }
}