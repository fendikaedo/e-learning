<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_materi = Materi::with('mapel')->get();
        return view('admin.menu.materi.data_materi',compact('data_materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.materi.create_materi')->with([
            'materi' => Materi::all(),
            'data_mapel' => Mapel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mapel_id' => 'required',
            'nama_materi' => 'required|min:3|max:255',
            'file_materi' => 'file|mimes:pdf,doc,docx|max:2048',
        ]);
        if ($request) {
            $materi = new Materi();
            $materi->mapel_id = $request->mapel_id;
            $materi->nama_materi = $request->nama_materi;

            // Menyimpan file ke folder dan path ke database
            if ($request->hasFile('file_materi')) {
                $file = $request->file('file_materi');
                $fileName = time() . '_' . $file->getClientOriginalName();  // Nama file unik
                $filePath = $file->storeAs('uploads/materi', $fileName, 'public'); // Simpan file di folder 'uploads/materi'

                $materi->file_materi = $filePath; // Simpan path file ke database
            }

            if ($materi->save()) {
                return redirect()->route('materi.index');
            } else {
                return back();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.menu.materi.edit_materi')->with([
            'id_materi' => Materi::find($id),
            'data_mapel' => Mapel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id_materi = Materi::find($id);
        $id_materi->delete();

        return back();
    }
}
