<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\householdtablemodel;
use Illuminate\Support\Facades\DB;

class viewhouseholdscontroller extends Controller
{
    // public function viewHouseholdsFunc(){
    //     $data = householdtablemodel::all();
    //     return view('roles.adminside.viewhousehold',['households'=>$data]);
    // }

    public function viewHouseholdsFunc() {
        $households = householdtablemodel::all();
        $residents = DB::table('residents')
            ->select('householdID', DB::raw('COUNT(residentID) as totalResidents'))
            ->where('residentStatus', '=', 'Active')
            ->groupBy('householdID')
            ->get();
    
        return view('roles.adminside.viewhousehold', [
            'households' => $households,
            'residents' => $residents
        ]);
    }
    public function houseStatusFunc(){
        
    }

    // public function getHouseholdId(Request $request)
    // {
    //     $household_no = $request->input('householdNo');
        
    //     $query = DB::table('householdtable')
    //         ->select('householdID')
    //         ->where('householdNo', $household_no)
    //         ->first();
        
    //     $household_id = $query->householdID;
        
    //     return response()->json(['household_id' => $household_id]);
    // }

    // public function getHouseholdId(Request $request) {
    //     $householdNo = $request->input('householdNo');
    //     $householdId = "";
    
    //     if (!empty($householdNo)) {
    //         $query = DB::table('householdtable')->select('householdID')->where('householdNo', $householdNo)->first();
    //         $householdId = $query->householdID;
    //     }
    
    //     return response()->json(['householdId' => $householdId]);
    // }

    public function getData(Request $request)
    {
    $value = $request->input('value');
    $data = DB::table('householdtable')
        ->where('householdNo', 'like', "%$value%")
        ->get();
    return response()->json($data);
    }

    public function getHouseholdID(Request $request)
    {
    $householdno = $request->input('householdno');
    $household = householdtablemodel::where('householdNo', $householdno)->first();
    $householdid = $household ? $household->householdID : '';
    return response()->json($householdid);
    }
}
