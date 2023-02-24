<?php

namespace App\Http\Controllers;

use App\Models\residenttablemodel;
use Illuminate\Http\Request;

class regrequestcontroller extends Controller
{
    //
    //TO DISPLAY DATA FROM RESIDENT TABLE
    public function index()
    {
        $data = residenttablemodel::all();
        //$requests = table('residents')->get();
        return view('roles\adminside.listofrequest', ['data' => $data]);
    }
    public function displayData()
    {
        $data = residenttablemodel::where('accountStatus', '=', 'pending')->get();
        return view('roles\adminside.listofrequest', ['data' => $data]);
    }
    public function displayResidentList()
    {
        $data = residenttablemodel::where('residentStatus', '=', 'Active')->get();
        return view('roles\adminside.adminlistofresident', ['data' => $data]);
    }
    public function displayStaffList()
    {
        $data = residenttablemodel::where('residentStatus', '=', 'Active')
        ->where('userRole', '=', 'staff')
        ->get();
        return view('roles\adminside.stafflist', ['data' => $data]);
    }
    // public function store(Request $request)
    // {
    //     $requestData = $request->all();
    //     $fileName = time().$request->file('proofID')->getClientOriginalName();
    //     $path = $request->file('proofID')->storeAs('proofID', $fileName, 'public'); 
    //     $requestData["proofID"] = '/storage/'.$path;
    //     residenttablemodel::create($requestData);
    //     return redirect('admindashboard')->with('flash_message', 'Employee Addedd!');  
    // }
}
