<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Complaints;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class complaintsController extends Controller
{
    public function viewComplaints(){
        //$complaints = Complaints::all();
        $complaints = Complaints::latest()->get();
        return view('roles.adminside.listofcomplaints', compact('complaints'));
    }//End of Method

    public function addComplaints(){
        return view('roles.adminside.addcomplaints');
    }

    public function storeComplaints(Request $request)
    {
        Complaints::insert([
            'complainant'=>$request->name,
            'timeOfIncident'=>$request->time,
            'dateOfIncident'=>$request->date,
            'type'=>$request->type,
            'details'=>$request->details,
            'evidence'=>$request->evidence,
            //'created_by'=>$request->Auth::user()->id,
            //'time_reported'=>$request->Carbon::now(),
        ]);
        //jscript needed:
        // $notification = array(
        //     'message' => 'Complaint Reported Successfully!',
        //     'alert-type' => 'success'
        // );

        return redirect('/complaints/all');
    }

    public function editComplaint($id){
        $data = Complaints::findOrFail($id);
        // $complaint = Complaints::all();
        return view('editcomplaintsmodal', ['complaints' => $data]);
      

    }
    public function updateComplaints(Request $request)
    {
        $id = $request->id;
        Complaints::where('id', $id)->update([
            'complainant'=>$request->name,
            'timeOfIncident'=>$request->time,
            'dateOfIncident'=>$request->date,
            'type'=>$request->type,
            'details'=>$request->details,
            'evidence'=>$request->evidence,
            //'created_by'=>$request->Auth::user()->id,
            //'time_reported'=>$request->Carbon::now(),
        ]);
        //jscript needed:
        // $notification = array(
        //     'message' => 'Complaint Reported Successfully!',
        //     'alert-type' => 'success'
        // );

        return redirect('/complaints/all');
    }
    // public function destroy($id) {
    //    Complaints::findOrFail($id)->delete();

    //    return redirect()->back();
    // }
    public function destroy($id)
    {
        $complaint = Complaints::find($id);

        if ($complaint) {
            $complaint->delete();
            return redirect()->route('roles.adminside.listofcomplaints')
                ->with('success', 'Complaint deleted successfully.');
        } else {
            return redirect()->route('roles.adminside.listofcomplaints')
                ->with('error', 'Complaint not found.');
    }
    }
    public function viewDetails($id)
    {
        $data = Complaints::find($id);
        return view('viewcomplaintdetails', ['complaints' => $data]);
    }
    

}
