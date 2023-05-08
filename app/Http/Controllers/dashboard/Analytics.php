<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Dashboard\flight_done_general;

class Analytics extends Controller
{
  public function index()
  {
    
    return redirect('/login');
  }

  public function flight()
  {
    $currentYear = Carbon::now()->format('Y');

    //weekly flight schedule
    $weekly = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      // ->whereMonth('Date_Of_Flight', '1')
      ->whereBetween('Date_Of_Flight',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
      ->count();

      //previous month flight schedule
    $first_month = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      ->whereMonth('Date_Of_Flight', '1')
      ->count();

    $second_month = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      ->whereMonth('Date_Of_Flight', '2')
      ->count();

    $third_month = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      ->whereMonth('Date_Of_Flight', '3')
      ->count();

    // dd($daily);

    return view(
      'dashboard',
      [
        // 'daily'=> $daily,
        'first_month' => $first_month,
        'second_month' => $second_month,
        'third_month' => $third_month,
        'weekly'=> $weekly
      ]
    );
  }
}
