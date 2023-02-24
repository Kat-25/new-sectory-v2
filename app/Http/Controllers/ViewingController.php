<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\householdtable;
use App\Models\householdtablemodel;

class ViewingController extends Controller
{
    public function addHousehold(Request $req)
    {
        $household = new householdtablemodel();
        $household->householdNo=$req->householdno;
        $household->householdAddress=$req->addressh;
        $household->purokLeader=$req->purokleaderh;
        $household->save();
        
    }
}