<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Pa;
use App\Models\Pasien;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $userId, Request $request)
    {
        Pasien::create([
            'idUser' =>$userId,
            'tempatLahir' =>$request->tempatLahir,
            'tanggalLahir' =>$request->tanggalLahir,
            'noIdentitas' =>$request->noIdentitas,
            'nomorRumah' =>$request->nomorRumah,
            'nomorHp' =>$request->nomorHp,
            'namaKontakDarurat' =>$request->namaKontakDarurat,
            'nomorDarurat' =>$request->nomorDarurat,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'tanggalDaftar' =>$request->input('tanggalDaftar'),
            'alergi' =>$request->alergi,
            'golonganDarah' =>$request->golonganDarah,
            'tinggiBadan' =>$request->tinggiBadan,
            'beratBadan' =>$request->beratBadan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
