<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::where('is_archived', false)->get();
        return view('roles.adminside.documentIndex', compact('documents'));
    }

    public function create()
    {
        return view('addDocumentModal');
    }

    public function store(Request $request)
    {
        $document = new Document();
        $document->storeFile($request->file('file'));
        return redirect()->route('roles.adminside.documentIndex');
    }

    public function download(Document $document)
    {
        return $document->downloadFile();
    }

    public function archive(Document $document)
    {
        $document->archive();
        return redirect()->route('roles.adminside.documentIndex');
    }

    public function unarchive(Document $document)
    {
        $document->unarchive();
        return redirect()->route('roles.adminside.documentIndex');
    }

    public function delete(Document $document)
    {
        $document->deleteFile();
        return redirect()->route('roles.adminside.documentIndex');
    }
    public function modal(Document $document)
    {
        return view('viewDocumentModal', compact('document'));
    }
}
