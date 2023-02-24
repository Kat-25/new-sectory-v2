<?php

namespace App\Http\Controllers;

use App\Models\addresidentmodel;
use App\Models\householdtablemodel;
use Illuminate\Http\Request;

class addresidentcontroller extends Controller
{
    public function addResidentFunc(Request $request)
{
    $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'mname' => 'nullable|string|max:255',
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

    $resident = new addresidentmodel();
    $resident->firstName = $request->fname;
    $resident->middleName = $request->mname ?? '';
    $resident->lastName = $request->lname;
    $resident->userSuffix = $request->sname ?? '';
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
    $resident->householdNo = $request->householdno;
    $resident->householdID = $request->householdid;
    $resident -> userRole = $request->userrole;
    $resident -> householdRole = $request->householdrole;
    $resident -> userName = ($request -> fname.substr($request -> lname, 0, 3) . rand(0, 999));
    $resident -> passWord = $request -> lname . rand(0, 999);
    $resident -> residentStatus = $request->residentstatus;
    $resident -> firstTimeLogin = $request -> firsttimelog;
    $resident -> accountStatus = $request -> accountstatus;
    $resident -> save();
    
    return redirect('admindashboard');
}


}