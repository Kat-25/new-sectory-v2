<?php

namespace App\Http\Controllers;

use App\Models\residenttablemodel;
use Illuminate\Http\Request;
use App\Models\householdtablemodel;
use Illuminate\Support\Facades\DB;

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

    public function showDetails($id)
    {
        $data = residenttablemodel::find($id);
        return view('roles.adminside.viewrequestdetails', ['data' => $data]);
    }

    //REQUESTS VIEW
    public function viewRequestsRegisterFunc($id)
    {
        $data = residenttablemodel::find($id);
        return view('roles.adminside.viewrequestdetails', ['residents' => $data]);
    }
    //RESIDENTS VIEW
    public function viewResidentsFunc($id)
    {
        $data = residenttablemodel::find($id);
        return view('roles.adminside.viewresidentdetails', ['residents' => $data]);
    }

    function viewRequestsResidentFunc(Request $req){
        
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

    public function approveReqFunc(Request $request) {
        // Get the value of the "status" field from the form
        $status = $request->input('status');
        
        // Get the value of the "newAccountStatus" field from the form
        $newAccountStatus = $request->input('newAccountStatus');
    
        // Create an array of the fields to update
        $fieldsToUpdate = [];
    
        // Set the "accountStatus" field based on the value of the "status" or "newAccountStatus" field
        // if ($newAccountStatus) {
        //     $fieldsToUpdate['accountStatus'] = $newAccountStatus;
        // } else if ($status == 'Approved') {
        //     $fieldsToUpdate['accountStatus'] = 'Approved';
        // } else if ($status == 'Rejected') {
        //     $fieldsToUpdate['accountStatus'] = 'Rejected';
        // }
        if ($newAccountStatus) {
            $fieldsToUpdate['accountStatus'] = $newAccountStatus;
            if ($newAccountStatus == 'Approved') {
                $fieldsToUpdate['residentStatus'] = 'Active';
            } else if ($newAccountStatus == 'Rejected') {
                // Delete the record from the database if the "newAccountStatus" is "Rejected"
                $residents = residenttablemodel::find($request->input('residentidh'));
                $residents->delete();
                return redirect('registration-requests');
            }
        }
    
        // Save the form data to the database or do other processing as needed
        $residents = residenttablemodel::find($request->input('residentidh'));
        $residents->update($fieldsToUpdate);
    
        // Redirect the user back to the form or to another page
        return redirect('registration-requests');
    }

    public function updateStatus(Request $request)
    {
        $residentID = $request->input('residentID');
        $accountStatus = $request->input('accountStatus');

        DB::table('residents')
        ->where('residentID', $residentID)
        ->update([
            'accountStatus' => $accountStatus,
            'residentStatus' => 'Active'
        ]);

        // return response()->json([
        //     'message' => 'Status updated successfully'
        // ]);
        return response()->json([
            
        ]);
    }

    public function deleteRequest(Request $request)
    {
    $residentID = $request->input('residentID');

    DB::table('residents')
        ->where('residentID', $residentID)
        ->delete();

    return response()->json([
        
    ]);
    }

    // public function editComplaint($id){
    //     $complaint = Complaints::findOrFail($id);
    //     // $complaint = Complaints::all();
    //     return view('roles.adminside.editcomplaint', compact('complaint'));

    // }
    // public function showDetails(Request $request)
    // {   
    //     return view('roles.adminside.viewrequesdetails', compact('request'));
    // }


}
