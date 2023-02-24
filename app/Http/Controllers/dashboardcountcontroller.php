<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dashboardcountmodel;
use App\Models\dashboardcounthouseholdmodel;
use App\Models\residenttablemodel;


class dashboardcountcontroller extends Controller
{
    public function countResidents()
    {
        $residentCount = dashboardcountmodel::countActiveResidents();
        $houseCount = dashboardcounthouseholdmodel::countActiveHouseholds();$displayName = array();
        $pendingAccCount = dashboardcountmodel::countPendingAccounts();
        return view('roles.adminside.admindashboard', compact('residentCount','houseCount','pendingAccCount'));
        
    }
}
