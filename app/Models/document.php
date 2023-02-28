<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    use HasFactory;
    public function storeFile(UploadedFile $file)
    {
        $path = $file->store('documents');
        $this->name = $file->getClientOriginalName();
        $this->file_path = $path;
        $this->save();
    }

    public function downloadFile()
    {
        return Storage::download($this->file_path, $this->name);
    }

    public function deleteFile()
    {
        Storage::delete($this->file_path);
        $this->delete();
    }

    public function archive()
    {
        $this->is_archived = true;
        $this->save();
    }

    public function unarchive()
    {
        $this->is_archived = false;
        $this->save();
    }
}
