<?php

namespace App\Http\Controllers;

use App\Http\Controllers\viewdetailsController;
use Illuminate\Http\Request;
use App\Models\residenttablemodel;

class viewdetailsController extends Controller
{
    //
    public function show($id)
    {
        $resident = residenttablemodel::findOrFail($id);

        return view('roles.adminside.show', compact('resident'));
    }
}
