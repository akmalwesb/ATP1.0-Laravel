<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_done_general extends Model
{
    use HasFactory;
    protected $connection = 'mysqlATP';
    protected $table = 'flights_done_general';
    protected $fillable = [
        
        'Indx',
        'FlightID',
        'Deleted',
        'Invoiced',
        'FlightNumber',
        'Date_Of_Flight',
        'Scheduled_Departure_Time',
        'Estimated_Flight_End_Time',
        'Total_Flight_Duration',
        'Base_ICAO',
        'Customer',
        'Contract',
        'Company_Col',
        'Flight_Type',
        'Operator',
        'Aircraft_Reg',
        'Crew1',
        'Crew1LogID',
        'Crew2',
        'Crew2LogID',
        'CrewCM',
        'CrewCMLogID',
        'CrewCodeP1',
        'CrewCodeP2',
        'CrewCodeCM',
        'FlightDone',
        'First_Start_Fuel',
        'Tech_Log_Number',
        'Fuel_On_Board',
        'Flight_Status',
        'P1_Checks_Exceedences',
        'P2_Checks_Exceedences',
        'CM_Checks_Exceedences',
        'P1_Exceedence_Authorised_By',
        'P2_Exceedence_Authorised_By',
        'CM_Exceedence_Authorised_By',
        'P1_Checks_Exceedences_ID',
        'P2_Checks_Exceedences_ID',
        'CM_Checks_Exceedences_ID',
        'Remarks',
        'Total_Fuel_Used',
        'OFP_Version',
        'Computer_Name',
        'IP',
        'Spare1',
        'Spare2',
        'Last_Updated',

    ];
}
