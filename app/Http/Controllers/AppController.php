<?php


namespace App\Http\Controllers;

use App\Models\Back\Prediction;
use App\Models\Back\PredictionByDate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppController extends Controller
{
    use Traits\Today\TodayGames;
    use Traits\Today\TodayFederationsGames;
    use Traits\Today\TodayCountriesGames;
    use Traits\Mounth\MounthGames;
}
