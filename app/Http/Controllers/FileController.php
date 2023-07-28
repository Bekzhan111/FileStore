<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index(){
        return view('files',[
            'files' => File::latest()->filter(request(['search']))->paginate(50)
        ]);
    }

    public function show(File $file){
        return view('file', [
            'file' => $file
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required'
        ]);  
        if($request->hasFile('file')){
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }


        File::create($formFields);
        return redirect('/')->with('message', 'File saved successfully!');
    }
    public function edit(File $file){
        return view('edit', ['file' => $file]);
    }

    public function update(Request $request, File $file){
        $formFields = $request->validate([
            'title' => 'required'
        ]);  
        if($request->hasFile('file')){
            $formFields['file'] = $request->file('file')->store('files', 'public');
        }


        $file->update($formFields);
        return back()->with('message', 'File updated successfully!');
    }
}
