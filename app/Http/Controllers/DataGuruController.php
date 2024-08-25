<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class DataGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::with('jabatan')->get();

        return view('admin.menu.guru.data_guru',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.guru.create_guru')->with([
            'guru' => Guru::all(),
            'data_jabatan' => Jabatan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required|min:3|max:255',
            'jabatan_id' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        if ($request) {
            $guru = new Guru();
            $guru->nip = $request->nip;
            $guru->nama_guru = $request->nama_guru;
            $guru->jabatan_id = $request->jabatan_id;
            $guru->jenis_kelamin = $request->jenis_kelamin;
            $guru->alamat = $request->alamat;
            $guru->no_telp = $request->no_telp;
            if ($guru->save()) {
                return redirect()->route('data_guru.index');
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
        //
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
        //
    }
}
