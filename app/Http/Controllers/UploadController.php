<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function Uploaded(Request $request){
        $request->validate([
            'upload' => 'required|file|max:1000',
        ]);

        $file = $request->upload->getClientOriginalName();
        $upload = $request->upload;
        $namafile = $file.'.'.$upload->extension();

        Storage::putFileAs('public/images',$upload, $namafile);
        $imageUrl = 'images/'.$namafile;

        $newpath = asset('image/'.$file);
        echo "Upload successful, file is in: $newpath";
    }
}
