<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_done_payload extends Model
{
    use HasFactory;
    protected $connection = 'mysqlATP';
    protected $table = 'flights_done_payload';
    protected $fillable = [
        'Indx',
        'FlightID',
        'Deleted',
        'Sector' ,
        'Crew1Weight',
        'Crew2Weight' ,
        'CMWeight' ,
        'PaxNumberRow1' ,
        'PaxNumberRow2' ,
        'PaxNumberRow3',
        'PaxNumberRow4' ,
        'PaxWeightRow1' ,
        'PaxWeightRow2' ,
        'PaxWeightRow3' ,
        'PaxWeightRow4' ,
        'PaxNumberTotal' ,
        'PaxWeightTotal',
        'HoldBaggage' ,
        'HoldFreight' ,
        'ACWeight',
        'ACARM' ,
        'ROLE',
        'Take_Off_Fuel' ,
        'TakeOff_Weight',
        'Take_Off_Arm',
        'Landing_Fuel' ,
        'Landing_Weight',
        'Landing_Arm',
        'Comments',
        'Payload_Offered',
        'Last_Updated',
    ];
}