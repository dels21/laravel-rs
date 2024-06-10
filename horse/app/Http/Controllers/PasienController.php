<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Pa;
use App\Models\Pasien;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function pasienFromUser(){
        $user = User::where('role','pasien')->get();
        $pasien = Pasien::all();
        // dd($pasien);
        return view('karyawan.list-pasien', compact('pasien','user'));
     }
    public function index()
    {
        $pasien = Pasien::all();

        return view('karyawan.list-pasien', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $userId, Request $request)
    {
        //

        Pasien::create([
            'idUser' =>$userId,
            'tempatLahir' =>$request->tempatLahir,
            'tanggalLahir' =>$request->tanggalLahir,
            'noIdentitas' =>$request->noIdentitas,
            'tipeIdentitas' =>$request->tipeIdentitas,
            'jenisKelamin' =>$request->jenisKelamin,
            'pekerjaan' =>$request->pekerjaan,
            'alamat' =>$request->alamat,
            'kota' =>$request->kota,
            'nomorRumah' =>$request->nomorRumah,
            'nomorHp' =>$request->nomorHp,
            'namaKontakDarurat' =>$request->namaKontakDarurat,
            'nomorDarurat' =>$request->nomorDarurat,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'statusPerkawinan' =>$request->statusPerkawinan,
            'tanggalDaftar' =>$request->input('tanggalDaftar'),
            'alergi' =>$request->alergi,
            'golonganDarah' =>$request->golonganDarah,
            'tinggiBadan' =>$request->tinggiBadan,
            'beratBadan' =>$request->beratBadan,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
        $pasien->update([
            'tempatLahir' =>$request->tempatLahir,
            'tanggalLahir' =>$request->tanggalLahir,
            'noIdentitas' =>$request->noIdentitas,
            'nomorRumah' =>$request->nomorRumah,
            'nomorHp' =>$request->nomorHp,
            'namaKontakDarurat' =>$request->namaKontakDarurat,
            'nomorDarurat' =>$request->nomorDarurat,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'alergi' =>$request->alergi,
            'golonganDarah' =>$request->golonganDarah,
            'tinggiBadan' =>$request->tinggiBadan,
            'beratBadan' =>$request->beratBadan
        ]);


        return redirect()->route('isi_nanti')->with('success','Pasien berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
        $pasien->delete();

        return redirect()->route('isi_nanti')->with('success','Pasien berhasil dihapus');
    }
}
