<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboardcounthouseholdmodel extends Model
{
    use HasFactory;
    public $table = 'householdtable';

    public static function countActiveHouseholds()
    {
        return dashboardcounthouseholdmodel::where('householdStatus', 'Active')->count();
    }

    
}
