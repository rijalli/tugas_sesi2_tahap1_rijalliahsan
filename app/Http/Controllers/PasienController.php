<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index',[
            'pasiens' => $pasiens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasienRequest $request)
    {
        $pasien = new Pasien;
        $pasien->nama = $request->nama;
        $pasien->nik = $request->nik;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->telp = $request->telp;
        $pasien->nama_orangtua = $request->nama_orangtua;
        $pasien->tanggal_daftar = $request->tanggal_daftar;
        $pasien->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            
            'nik' => $pasien,
            'nama' => $pasien,
            'jenis_kelamin' => $pasien,
            'tanggal_lahir' => $pasien,
            'alamat' => $pasien,
            'pekerjaan' => $pasien,
            'telp' => $pasien,
            'nama_orangtua' => $pasien,
            'tanggal_daftar' => $pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePasienRequest  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        
        $pasien->nama = $request->nama;
        $pasien->nik = $request->nik;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->telp = $request->telp;
        $pasien->nama_orangtua = $request->nama_orangtua;
        $pasien->tanggal_daftar = $request->tanggal_daftar;
        $pasien->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
       $pasien->delete();

       return redirect()->route('pasien.index');
    }
}
