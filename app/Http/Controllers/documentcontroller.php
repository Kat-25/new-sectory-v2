<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\document;

class documentcontroller extends Controller
{
    
    public function createForm() {
        return view('roles.adminside.manageDocument');
    }
    public function fileUpload(Request $request) {
        $request->validate(['file' => 'required|mimes:csv,txt,xlx,xlx,pdf,doc|max:2048']);
        $fileModel = new document;
        if($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()   
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
    }
}
