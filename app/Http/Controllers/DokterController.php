<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Http\Requests\StoredokterRequest;
use App\Http\Requests\UpdatedokterRequest;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index',[
            'dokters' => $dokters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredokterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredokterRequest $request)
    {
        $dokter = new Dokter;
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->telp = $request->telp;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit(dokter $dokter)
    {
        return view('dokter.edit', [
            
            
            'nama' => $dokter,
            'jenis_kelamin' => $dokter,
            'alamat' => $dokter,
            'telp' => $dokter,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedokterRequest  $request
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedokterRequest $request, dokter $dokter)
    {
       
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->telp = $request->telp;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokter.index');
    }
}
