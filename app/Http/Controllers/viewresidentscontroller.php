<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viewresidentsmodel;
use Illuminate\Support\Facades\DB;

class viewresidentscontroller extends Controller
{
    public function viewResidentsFunc(){
        $data = viewresidentsmodel::all();
        return view('roles.adminside.viewresidents',['residents'=>$data]);
    }

    public function approveRequest($residentID)
    {
    // Update the account status in the database
    DB::table('residents')->where('residentID', $residentID)->update(['accountStatus' => 'Approved', 'residentStatus' => 'Active']);

    // Redirect back to the previous page
    return redirect()->back()->with('success', 'Request approved successfully.');
    }
    
}
