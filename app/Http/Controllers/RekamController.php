<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use App\Http\Requests\StoreRekamRequest;
use App\Http\Requests\UpdateRekamRequest;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekam = Rekam::all();
        return view('rekam.index',[
            'rekam' => $rekam
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRekamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRekamRequest $request)
    {
        $rekam = new Rekam();
        $rekam->id = $request->id;
        $rekam->id_pasien = $request->id_pasien;
        $rekam->nama_pasien = $request->nama_pasien;
        $rekam->keluhan = $request->keluhan;
        $rekam->diagnosa = $request->diagnosa;
        $rekam->resep = $request->resep;
        $rekam->tanggal_periksa = $request->tanggal_periksa;
        $rekam->id_dokter = $request->id_dokter;
        $rekam->nama_dokter = $request->nama_dokter;
        $rekam->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function show(Rekam $rekam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekam $rekam)
    {
        return view('Rekam.edit', [
            
            'id' => $rekam,
            'id_pasien' => $rekam,
            'nama_pasien' => $rekam,
            'keluhan' => $rekam,
            'diagnosa' => $rekam,
            'resep' => $rekam,
            'tanggal_periksa' => $rekam,
            'id_dokter' => $rekam,
            'nama_dokter' => $rekam,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRekamRequest  $request
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRekamRequest $request, Rekam $rekam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekam $rekam)
    {
        $rekam->delete();

        return redirect()->route('Rekam.index');
    }
}
