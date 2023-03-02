<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboardcountmodel;
use App\Models\dashboardcounthouseholdmodel;
use App\Models\residenttablemodel;
use DB;

class dashboardcountcontroller extends Controller
{
    public function countResidents()
    {
        $resident = residenttablemodel::all();
        $residentCount = dashboardcountmodel::countActiveResidents();
        $houseCount = dashboardcounthouseholdmodel::countActiveHouseholds();$displayName = array();
        $pendingAccount = dashboardcountmodel::countPendingAccounts();
        $data = db::table('residents')->paginate(5);
        return view('roles.adminside.admindashboard', compact('resident','residentCount','houseCount','pendingAccount', 'data'));
    }

    // public function residentOverview()
    // {
    //     $resident = residenttablemodel::all();
    //     return view('roles.adminside.admindashboard', compact('resident'));
    // }
}
