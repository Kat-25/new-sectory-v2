<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\householdtablemodel;
use App\Models\residenttablemodel;

class edithouseholdcontroller extends Controller
{

    function showValueHouseholdsFunc($id){
        $data = householdtablemodel::find($id);
        return view('roles.adminside.edithousehold1', ['householdtable'=>$data]);
    }

    function showValueHouseholdsFunc1($id){
        $data = householdtablemodel::find($id);
        return view('roles.adminside.householddetails', ['householdtable'=>$data]);
    }

    function editHouseholdsFunc(Request $req){
        
        $data = householdtablemodel::find($req->householdidh);
        $data->householdNo=$req->householdno;
        $data->householdAddress=$req->addressh;
        $data->purokLeader=$req->purokleaderh;
        $data->householdStatus=$req->householdstatush;
        $data->save();

        residenttablemodel::where('householdID', $req->householdidh)
        ->update(['householdNo' => $req->householdno]);

        return redirect('viewhousehold');
    }

    function editHouseholdsFunc1(Request $req){
        
        $data = householdtablemodel::find($req->householdidh);
        $data->householdNo=$req->householdno;
        $data->householdAddress=$req->addressh;
        $data->purokLeader=$req->purokleaderh;
        $data->householdStatus=$req->householdstatush;
        $data->save();

        residenttablemodel::where('householdID', $req->householdidh)
        ->update(['householdNo' => $req->householdno]);

        return redirect('viewhousehold');
    }

}
