<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\aircraftlist;
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

  public function chart()
  {
    $daily = flight_done_general::select('Date_Of_Flight', DB::raw('count(*) as total'), DB::raw("DAYNAME(Date_Of_Flight) as dayname"))
    ->whereYear('Date_Of_Flight', [Carbon::now()->format('Y')])
    ->whereBetween('Date_Of_Flight',['2023-02-05', '2023-02-11'])
    // ->whereBetween('Date_Of_Flight',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
    ->groupby('Date_Of_Flight')
    ->get();
      
      return response()->json([
        'data' => $daily
      ]);
  }

  public function flight()
  {
    $currentYear = Carbon::now()->format('Y');
    $currentMonth = Carbon::now()->format('m');
    $first_month_name = Carbon::now()->subMonth(2)->format('F');
    $second_month_name = Carbon::now()->subMonth()->format('F');
    $third_month_name = Carbon::now()->format('F');
    


    //daily flight schedule
    $daily = flight_done_general::select('Date_Of_Flight', DB::raw('count(*) as total'))
    ->whereYear('Date_Of_Flight', [Carbon::now()->format('Y')])
    ->whereBetween('Date_Of_Flight',['2023-02-05', '2023-02-11'])
    // ->whereBetween('Date_Of_Flight',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
    ->groupby('Date_Of_Flight')
    ->get();

    // $day = Carbon::parse($daily)->format('l');

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
      ->whereMonth('Date_Of_Flight',$currentMonth-2)
      ->count();

    $second_month = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      ->whereMonth('Date_Of_Flight', $currentMonth-1)
      ->count();

    $third_month = flight_done_general::select('Date_Of_Flight')
      // ->where('Date_Of_Flight', '2023-02-01')
      ->whereYear('Date_Of_Flight', $currentYear)
      ->whereMonth('Date_Of_Flight', $currentMonth)
      ->count();

      //total passanger
      $total_passenger = flight_done_general::select ('flights_done_general.Date_Of_Flight',DB::raw('sum(flights_done_payload.PaxNumberTotal) As Total_Passenger'))
      ->leftjoin ('flights_done_payload','flights_done_payload.FlightID','=', 'flights_done_general.FlightID')
      ->leftjoin ('aircraftlist','aircraftlist.AircraftReg', '=', 'flights_done_general.Aircraft_Reg')
      ->where ('flights_done_general.Date_Of_Flight', '=','2023-02-05')
      ->groupby ('Date_Of_Flight')
      ->get();

      //total fleet hour
      // $fleet_hour = flight_done_general::join('aircraftlist','aircraftlist.AircraftReg', 'flights_done_general.Aircraft_Reg')
      // ->where('flights_done_general.Date_Of_Flight','2014-04-02')
      // ->where('flights_done_general.Deleted', 'No')
      // ->where('aircraftlist.ICAO_Type','A139')
      // ->sum("time_to_sec('flights_done_general.Total_Flight_Duration') as second");

      // total flight number
      $flight_number = flight_done_general::select('flights_done_general.FlightID')
      ->join('aircraftlist','aircraftlist.AircraftReg','=', 'flights_done_general.Aircraft_Reg')
      ->where('flights_done_general.Date_Of_Flight','2023-02-20')
      ->where('aircraftlist.ICAO_Type', '=' ,'A139')
      ->where('flights_done_general.Deleted','=','No')
      ->count();

    return view(
      'dashboard',
      [
        'data'=> $daily,
        'first_month' => $first_month,
        'second_month' => $second_month,
        'third_month' => $third_month,
        'weekly'=> $weekly,
        'first_month_name' => $first_month_name,
        'second_month_name' => $second_month_name,
        'third_month_name' => $third_month_name,
        'fleet_hour' =>$fleet_hour,
        'flight_number' =>$flight_number,
        'total_passenger' => $total_passenger,
      ]
    );
  }
}
