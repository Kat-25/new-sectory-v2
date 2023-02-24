<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class dashboardcountmodel extends Model
{
    use HasFactory;
    public $table = 'residents';

    public static function countActiveResidents()
    {
        return dashboardcountmodel::where('residentStatus', 'Active')->count();
    }
    public static function countResidents()
    {
        return self::count();
    }
    public static function countPendingAccounts()
    {
        return dashboardcountmodel::where('residentStatus', 'Pending')
        ->where('accountStatus', 'Pending')
        ->count();
    }
}
