<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dokter = Dokter::all();

        return view('isi_nanti', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $userId, Request $request)
    {
        Dokter::create([
            'idDokter' => $request->idDokter,
            'idUser' => $userId,
            'idKtp' => $request->idKtp,
            'jenisKelamin' => $request->jenisKelamin,
            'tanggalLahir' => $request->tanggalLahir,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'nomorHp' => $request->nomorHp,
            'nomorTelpRumah' => $request->nomorTelpRumah
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
        //
        $dokter->update([
            'idDokter' => $request->idDokter,
            'idKtp' => $request->idKtp,
            'jenisKelamin' => $request->jenisKelamin,
            'tanggalLahir' => $request->tanggalLahir,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'nomorHp' => $request->nomorHp,
            'nomorTelpRumah' => $request->nomorTelpRumah
        ]);

        return redirect()->route('isi_nanti')->with('success', 'Dokter berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        //

        $dokter->delete();

        return redirect()->route('isi_nanti')->with('success', 'Dokter berhasil dihapus');
    }

    public function getTotalDokter()
    {
        $totalDokter = DB::table('dokter')->count();
        return $totalDokter;
    }
}
