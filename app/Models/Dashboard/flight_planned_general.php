<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_planned_general extends Model
{
    use HasFactory;
    protected $connection = 'mysqlATP';
    protected $table = 'flights_planned_general';
    protected $fillable = [
        'Indx',
        'FlightID',
        'Deleted',
        'FlightNumber',
        'Completed',
        'FlightDone',
        'Date_Of_Flight',
        'Scheduled_Departure_Time',
        'Estimated_Flight_End_Time',
        'Total_Flight_Duration',
        'Customer',
        'Contract',
        'Company_Col',
        'Flight_Type',
        'Operator',
        'Base_ICAO',
        'Aircraft_Reg',
        'Crew1',
        'Crew1_UserID',
        'Crew2',
        'Crew2_UserID',
        'CrewCM',
        'CrewCM_UserID',
        'CrewCodeP1',
        'CrewCodeP2',
        'CrewCodeCM',
        'Extra_Crew1',
        'Extra_Crew1_UserID',
        'Extra_Crew2',
        'Extra_Crew2_UserID',
        'Extra_Crew3',
        'Extra_Crew3_UserID',
        'Extra_Crew4',
        'Extra_Crew4_UserID',
        'First_Start_Fuel',
        'First_Taxi_Fuel',
        'Original_Fuel_On_Board',
        'Fuel_On_Board',
        'P1_Checks_Exceedences',
        'P2_Checks_Exceedences',
        'CM_Checks_Exceedences',
        'P1_Exceedence_Authorised_By',
        'P2_Exceedence_Authorised_By',
        'CM_Exceedence_Authorised_By',
        'P1_Checks_Exceedences_ID',
        'P2_Checks_Exceedences_ID',
        'CM_Checks_Exceedences_ID',
        'Comments',
        'OFP_Version',
        'Computer_Name',
        'IP',
        'Last_Updated',
    ];
}
