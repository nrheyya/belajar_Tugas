<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = \App\Models\File::latest()->paginate(10);  
        
        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi file yang di-upload
        $request->validate([
            'file' => 'required|file|mimes:docx,pdf|max:2048',  // Validasi file
        ]);
    
        // Periksa apakah file ada
        if ($request->hasFile('file')) {
            // Ambil file
            $file = $request->file('file');
            
            // Simpan file ke storage
            $filePath = $file->store('uploads'); // Simpan file di folder 'uploads'
            
            // Simpan data file ke dalam database
            \App\Models\File::create([
                'original_name' => $file->getClientOriginalName(),
                'generated_name' => $file->hashName(),
            ]);
    
            // Redirect dengan pesan sukses
            return redirect()->route('files.index')->with('success', 'File berhasil diunggah.');
        } else {
            return redirect()->back()->withErrors(['file' => 'Tidak ada file yang diunggah.']);
        }
    }

    public function download(File $files)
    {
        $filePath = storage_path("app/uploads/{$files->generated_name}");

        if (file_exists($filePath)) {
            return response()->download($filePath, $files->original_name);
        } else {
            abort(404, 'File not found');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(File $files)
    {
        $data['detail'] = $files;
        return view('files.show', $data,);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}
