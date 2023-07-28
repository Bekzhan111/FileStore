<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index(){
        return view('files',[
            'files' => File::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(File $file){
        return view('file', [
            'file' => $file
        ]);
    }
}
