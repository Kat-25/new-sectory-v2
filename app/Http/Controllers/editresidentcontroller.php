<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\residenttablemodel;
use Illuminate\Support\Facades\Redis;

class editresidentcontroller extends Controller
{
    function showValueResidentFunc($id){ 
        $data = residenttablemodel::find($id);
        return view('roles.adminside.editresident1', ['residents'=>$data]);
    }

    function editResidentFunc(Request $req){
        
        $data = residenttablemodel::find($req->residentidh);
        $data->firstName=$req->fname;
        $data->userGender=$req->genderh;
        $data->userCitizenship=$req->citizenshiph;
        $data->residentStatus=$req->residentstatush;
        $data->save();
        return redirect('residentlist');
    }

    function editResidentFunc1(Request $request)
    {
    $data = residenttablemodel::find($request->residentidh);
    $data->firstName = $request->fname;
    $data->middleName = $request->mname ?? '';
    $data->lastName = $request->lname;
    $data->userSuffix = $request->sname ?? '';

    // $requestData = $request->all();
    // $fileName = time().$request->file('photo')->getClientOriginalName();
    // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    // $data->proofID = '/storage/'.$path;
    // $requestData["photo"] = $data->proofID;

    $requestData = $request->all();
    if ($request->hasFile('photo')) {
    // A new file was uploaded, save the new file and update the proofID field
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
    $data->proofID = '/storage/'.$path;
    $requestData["photo"] = $data->proofID;
    } else {
        // No new file was uploaded, keep the original proofID value
        $requestData["photo"] = $data->proofID;
    }

    $data->birthDate = $request->birthdate;
    $data->birthPlace = $request->birthplace;
    $data->userAge = $request->age;
    $data->civilStatus = $request->civilstatus;
    $data->userOccupation = $request->occupation;
    $data->userGender = $request->gender;
    $data->bloodType = $request->bloodtype;
    $data->userReligion = $request->religion;
    $data->userWeight = $request->weight;
    $data->userHeight = $request->height;
    $data->userCitizenship = $request->citizenship;
    $data->userSchool = $request->nameofschool ?? '';
    $data->userEducation = $request->educationalattainment ?? '';
    $data->fatherFirstName = $request->fatherfname;
    $data->fatherMiddleName = $request->fathermname ?? '';
    $data->fatherLastName = $request->fatherlname;
    $data->fatherSuffix = $request->fathersname ?? '';
    $data->motherFirstName = $request->motherfname;
    $data->motherMiddleName = $request->mothermname ?? '';
    $data->motherLastName = $request->motherlname;
    $data->motherSuffix = $request->mothersname ?? '';
    $data->permanentAddress = $request->permanentaddress;
    $data->presentAddress = $request->presentaddress;
    $data->contactNumber = $request->contactnumber;
    $data->householdNo = $request->householdno ?? 0;
    $data->householdID = $request->householdid ?? 13;
    $data->userRole = $request->userrole;
    $data->householdRole = $request->householdrole;
    $data -> userName = ($request -> fname.substr($request -> lname, 0, 3) . rand(0, 999));
    $data -> passWord = $request -> lname . rand(0, 999);
    $data -> residentStatus = $request->residentstatus;
    $data -> firstTimeLogin = $request -> firsttimelog;
    $data -> accountStatus = $request -> accountstatus;
    $data -> save();
    
    return redirect('residentlist');
    }
}
