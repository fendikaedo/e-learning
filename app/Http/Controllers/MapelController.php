<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_mapel = Mapel::all();
        return view('admin.menu.mapel.data_mapel',compact('data_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.mapel.create_mapel')->with([
            'mapel' => Mapel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|min:3|max:255',
        ]);
        if ($request) {
            $mapel = new Mapel();
            $mapel->nama_mapel = $request->nama_mapel;
            if ($mapel->save()) {
                return redirect()->route('mapel.index');
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
        $id_mapel = Mapel::find($id);
        $id_mapel->delete();

        return back();
    }
}
