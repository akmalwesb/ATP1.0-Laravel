<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aircraftlist extends Model
{
    use HasFactory;
    protected $connection = 'mysqlATP';
    protected $table = 'aircraftlist';
    protected $fillable = [
        'AircraftReg',
        'Type',
        'ICAO_Type',
        'Serial',
        'Deleted',
        'Base',
        'SSR',
        'HourlyFuelBurn',
        'FuelReserve',
        'GroundFuelBurn',
        'FuelMargin',
        'FuelUnits',
        'FuelCapacity',
        'Fuel_Config',
        'CruiseTAS',
        'WeightUnit',
        'MTOW',
        'MTOWMLWOS',
        'DValue',
        'DeckFuel',
        'HoldCapacity1',
        'HoldCapacity2',
        'HoldCapacity3',
        'HoldCapacity4',
        'HoldCapacity5',
        'HoldCapacity6',
        'HoldCapacity7',
        'HoldCapacity8',
        'HoldCapacity9',
        'HoldCapacity10',
        'Approachfuel',
        'MinSectorFuel',
        'WeightPenalty',
        'SeatsPerRow',
        'Opt1',
        'Start_Fuel',
        'Dropdown',
        'Configuration',
        'Role1Name',
        'Role2Name',
        'Role3Name',
        'Role4Name',
        'Role5Name',
        'Role6Name',
        'Role7Name',
        'Role8Name',
        'Role9Name',
        'Role10Name',
        'Role1APS',
        'Role2APS',
        'Role3APS',
        'Role4APS',
        'Role5APS',
        'Role6APS',
        'Role7APS',
        'Role8APS',
        'Role9APS',
        'Role10APS',
        'Role1ARM',
        'Role2ARM',
        'Role3ARM',
        'Role4ARM',
        'Role5ARM',
        'Role6ARM',
        'Role7ARM',
        'Role8ARM',
        'Role9ARM',
        'Role10ARM',
        'Life_Jacket_Number_Role_1',
        'Life_Jacket_Number_Role_2',
        'Life_Jacket_Number_Role_3',
        'Life_Jacket_Number_Role_4',
        'Life_Jacket_Number_Role_5',
        'Life_Jacket_Number_Role_6',
        'Life_Jacket_Number_Role_7',
        'Life_Jacket_Number_Role_8',
        'Life_Jacket_Weight_Role_1',
        'Life_Jacket_Weight_Role_2',
        'Life_Jacket_Weight_Role_3',
        'Life_Jacket_Weight_Role_4',
        'Life_Jacket_Weight_Role_5',
        'Life_Jacket_Weight_Role_6',
        'Life_Jacket_Weight_Role_7',
        'Life_Jacket_Weight_Role_8',
        'Updated_By',
        'LastUpdated',
    ];
}
