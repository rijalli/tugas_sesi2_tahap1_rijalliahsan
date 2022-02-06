<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {
        $transaksi = new Transaksi();
        $transaksi->id = $request->id;
        $transaksi->id_rekam = $request->id_pasien;
        $transaksi->id_pasien = $request->nama_pasien;
        $transaksi->id_obat = $request->keluhan;
        $transaksi->total = $request->diagnosa;
        $transaksi->tanggal_transaksi = $request->resep;
        $transaksi->nama_pasien = $request->tanggal_periksa;
        
        $transaksi->save();

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', [
            
            'id' => $transaksi,
            'id_rekam' => $transaksi,
            'id_pasien' => $transaksi,
            'id_obat' => $transaksi,
            'total' => $transaksi,
            'tanggal_transaksi' => $transaksi,
            'nama_pasien' => $transaksi,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        $transaksi->id = $request->nama;
        $transaksi->id_pasien = $request->nik;
        $transaksi->id_rekam = $request->tanggal_lahir;
        $transaksi->id_obat = $request->alamat;
        $transaksi->total = $request->jenis_kelamin;
        $transaksi->tanggal_transaksi = $request->pekerjaan;
        $transaksi->nama_pasien = $request->telp;
        
        $transaksi->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

       return redirect()->route('transaksi.index');
    }
}
