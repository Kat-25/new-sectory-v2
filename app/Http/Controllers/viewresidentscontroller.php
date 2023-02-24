<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viewresidentsmodel;

class viewresidentscontroller extends Controller
{
    public function viewResidentsFunc(){
        $data = viewresidentsmodel::all();
        return view('roles.adminside.viewresidents',['residents'=>$data]);
    }
}
