<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\householdtablemodel;

class addhouseholdcontroller extends Controller
{

    public function addHouseholdFunc(Request $req)
    {
        $household = new householdtablemodel();
        $household->householdNo=$req->householdno;
        $household->householdAddress=$req->addressh;
        $household->purokLeader=$req->purokleaderh;
        $household->householdStatus=$req->householdstatush;
        $household->save();
        return view('roles.adminside.addhouseholds');
    }

    public function getUserData(Request $request)
    {
        $householdNo = $request->get('householdNo');
        $user = new householdtablemodel();
        $userData = $user->getUserData($householdNo);
        return response()->json($userData);
    }
}
