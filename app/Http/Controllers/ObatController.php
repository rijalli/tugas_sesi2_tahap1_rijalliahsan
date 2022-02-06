<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Http\Requests\StoreobatRequest;
use App\Http\Requests\UpdateobatRequest;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = obat::all();
        return view('obat.index',[
            'obat' => $obat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreobatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreobatRequest $request)
    {
        $obat = new obat;
        $obat->id = $request->id;
        $obat->naa_obat = $request->nama_obat;
        $obat->jumlah = $request->jumlah;
        $obat->harga = $request->harga;
        $obat->tanggal_produksi = $request->tanggal_produksi;
        $obat->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        
        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(obat $obat)
    {
        return view('obat.edit', [
            
            'id' => $obat,
            'nama_obat' => $obat,
            'jumlah' => $obat,
            'harga_obat' => $obat,
            'tanggal_produksi' => $obat,
            'tanggal_kadaluarsa' => $obat,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateobatRequest  $request
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateobatRequest $request, obat $obat)
    {
        $obat->id = $request->nama;
        $obat->nama_obat = $request->nama_obat;
        $obat->jumlah = $request->jumlah;
        $obat->harga_obat = $request->harga_obat;
        $obat->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        $obat->tanggal_produksi = $request->tanggal_produksi;
        
        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(obat $obat)
    {
        $obat->delete();

       return redirect()->route('obat.index');
    }
}
