<?php

namespace App\Http\Controllers;

use App\Models\residenttablemodel;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use PDO;
//use Session;

class customauthcontroller extends Controller
{
    //$request -> validate([]);




    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
    $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        
        'sname' => 'nullable|string|max:255',
        
        'gender' => 'required',
        'birthdate' => 'required',
        'birthplace' => 'required',
        'age' => 'required',
        'civilstatus' => 'required',
        'bloodtype' => 'required',
        'religion' => 'required',
        'weight' => 'required',
        'height' => 'required',
        'citizenship' => 'required',
        'householdrole' => 'required',
        'householdnumber' => 'nullable|string|max:255',
        'householdid' => 'nullable|string|max:255',
        'nameofschool' => 'nullable|string|max:255',
        'educationalattainment' => 'nullable|string|max:255',
        'fatherfname' => 'nullable|string|max:255',
        'fatherlname' => 'nullable|string|max:255',
        'fathermname' => 'nullable|string|max:255',
        'fathersname' => 'nullable|string|max:255',
        'motherfname' => 'nullable|string|max:255',
        'mothermname' => 'nullable|string|max:255',
        'motherlname' => 'nullable|string|max:255',
        'mothersname' => 'nullable|string|max:255',
        
        'permanentaddress' => 'nullable|string|max:255',
        'presentaddress' => 'nullable|string|max:255',
        'contactnumber' => 'required'
        
    ]);

    $resident = new residenttablemodel();
    $resident->firstName = $request->fname;
    $resident->middleName = $request->mname ?? '';
    $resident->lastName = $request->lname;
    $resident->userSuffix = $request->sname ?? '';

    // if ($request->hasFile('photo')) {
    //     $file = $request->file('photo');
    //     $fileName = time() . $file->getClientOriginalName();
    //     $path = $file->storeAs('public/images', $fileName);
    //     $resident->proofID = '/storage/' . $path;
    // }
    // if ($request->hasFile('photo')) {
    //     $file = $request->file('photo');
    //     $fileName = time() . $file->getClientOriginalName();
    //     $path = $file->storeAs('public/images', $fileName);
    //     dd($path); // add this line to see the value of $path
    //     $resident->proofID = '/storage/' . $path;
    // }
    // $requestData = $request->all();
    // $fileName = time().$request->file('photo')->getClientOriginalName();
    // $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
    // $resident->proofID = $requestData["photo"] = '/storage/'.$path;

    $requestData = $request->all();
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
    $resident->proofID = '/storage/'.$path;
    $requestData["photo"] = $resident->proofID;


    $resident->birthDate = $request->birthdate;
    $resident->birthPlace = $request->birthplace;
    $resident->userAge = $request->age;
    $resident->civilStatus = $request->civilstatus;
    $resident->userOccupation = $request->occupation;
    $resident->userGender = $request->gender;
    $resident->bloodType = $request->bloodtype;
    $resident->userReligion = $request->religion;
    $resident->userWeight = $request->weight;
    $resident->userHeight = $request->height;
    $resident->userCitizenship = $request->citizenship;
    $resident->userSchool = $request->nameofschool ?? '';
    $resident->userEducation = $request->educationalattainment ?? '';
    $resident->fatherFirstName = $request->fatherfname;
    $resident->fatherMiddleName = $request->fathermname ?? '';
    $resident->fatherLastName = $request->fatherlname;
    $resident->fatherSuffix = $request->fathersname ?? '';
    $resident->motherFirstName = $request->motherfname;
    $resident->motherMiddleName = $request->mothermname ?? '';
    $resident->motherLastName = $request->motherlname;
    $resident->motherSuffix = $request->mothersname ?? '';
    $resident->permanentAddress = $request->permanentaddress;
    $resident->presentAddress = $request->presentaddress;
    $resident->contactNumber = $request->contactnumber;
    $resident->householdNo = $request->householdno ?? 0;
    $resident->householdID = $request->householdid ?? 13;
    $resident->userRole = $request->userrole;
    $resident->householdRole = $request->householdrole;
    $resident -> userName = ($request -> fname.substr($request -> lname, 0, 3) . rand(0, 999));
    $resident -> passWord = $request -> lname . rand(0, 999);
    $resident -> residentStatus = $request->residentstatus;
    $resident -> firstTimeLogin = $request -> firsttimelog;
    $resident -> accountStatus = $request -> accountstatus;
    $resident -> save();
    
    return redirect('admindashboard');
    }

    public function loginUser(Request $req){
        $req -> validate([
            'username' => 'required',
            'password' => 'required'
    
        ]);
        
        // $user = residenttablemodel::where('userName', '=', $req->username)->first();
        $user = residenttablemodel::where('userName', $req->username)
        ->where('residentStatus', 'Active')
        ->where('accountStatus', 'Approved')
        ->first();
        if($user){
            if($req->password == $user->passWord){
                //$req = session()->put('loginID', $user->id);
                $req = Session::put('loginID', $user->residentID);
                Session::put('usernamee', $user->userName);
                return redirect('admindashboard');
            }
            else{
                return back()->with('failed', 'Incorrect password.');
            }
        }
        else{
            
            return back()->with('failed', 'Account does not exist, or it is not approved yet.');
        }
    }

    public function logOut(){
        Auth::logout();
        Session::forget('usernamee');
        return redirect('/login');
    }

    
    // public function headerdisplayname()
    //     {
    //         $displayName = array();
    //         if(Session::has('loginID')){
    //             $displayName = residenttablemodel::where('residentID', Session::get('loginID'))
    //             ->where('residentStatus', 'Active')
    //             ->where('accountStatus', 'Approved')
    //             ->first();
    //         }
    //         return view('adminheader', compact('displayName'));
    //     }
    // public function headerdisplayname()
    //     {
    //         $displayName = '';
    //         if (Session::has('loginID')) {
    //             $uzer = residenttablemodel::where('residentID', Session::get('loginID'))
    //                 ->where('residentStatus', 'Active')
    //                 ->where('accountStatus', 'Approved')
    //                 ->first();
    //             $displayName = $uzer->userName;
    //         }
    //         return view('adminheader', compact('displayName'));
    // }
}
