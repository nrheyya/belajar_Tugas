<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_fileupload = FileUpload::all();
        return view('fileupload.index', compact('list_fileupload'));

        // $data['list_fileupload'] = FileUpload::all();
        // return view('fileupload.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fileupload.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $fileupload = new FileUpload();
        $fileupload->nama_pembuat = request('nama_pembuat');
        $fileupload->tanggal_dibuat = request('tanggal_pembuatan');
        $fileupload->file = request('file');
        $fileupload->save();
        return redirect('fileupload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        // Additional logic (e.g., storing file information in the database)

        return "File uploaded successfully!";
    }



    /**
     * Display the specified resource.
     */
    public function show(FileUpload $fileupload)
    {
        $url = Storage::url("uploads/{$fileupload}");
        $data['detail'] = $fileupload;
        return view('fileupload.show', $data, ['url' => $url]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileUpload $fileupload)
    {
        $data['detail'] = $fileupload;
        return view('fileupload.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FileUpload $fileupload)
    {
        $fileupload->nama_pembuat = request('nama_pembuat');
        $fileupload->tanggal_dibuat = request('tanggal_pembuatan');
        $fileupload->file = request('file');
        $fileupload->save();
        return redirect('fileupload');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileUpload $fileupload)
    {
            $fileupload->delete();
            return back();
    }    
}