<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranPemeriksaan;
use Brick\Math\BigInteger;


class PendaftaranPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $PendaftaranPemeriksaan = PendaftaranPemeriksaan::all();

        return view('isi_nanti', compact('PendaftaranPemeriksaan'));

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
    public function store(Request $request)
    {
        PendaftaranPemeriksaan::create([
            'noPemeriksaan' => $request->noPemeriksaan,
            'namaPasien' => $request->namaPasien,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'jenisKelaminPemohon' => $request->jenisKelaminPemohon,
            'hasilKeDokter' => $request->hasilKeDokter,
            'tanggal' => $request->tanggal,
            'teleponMobile' => $request->teleponMobile,
            'teleponDarurat' => $request->teleponDarurat,
            'dokterPengirim' => $request->dokterPengirim,
            'ruangan' => $request->ruangan,
            'teleponDokter' => $request->teleponDokter,
            'diagnosa' => $request->diagnosa,
            'modalitas1' => $request->modalitas1,
            'modalitas2' => $request->modalitas2,
            'modalitas3' => $request->modalitas3,
        ]);
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
        PendaftaranPemeriksaan::update([
            'noPemeriksaan' => $request->noPemeriksaan,
            'namaPasien' => $request->namaPasien,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'jenisKelaminPemohon' => $request->jenisKelaminPemohon,
            'hasilKeDokter' => $request->hasilKeDokter,
            'tanggal' => $request->tanggal,
            'teleponMobile' => $request->teleponMobile,
            'teleponDarurat' => $request->teleponDarurat,
            'dokterPengirim' => $request->dokterPengirim,
            'ruangan' => $request->ruangan,
            'teleponDokter' => $request->teleponDokter,
            'diagnosa' => $request->diagnosa,
            'modalitas1' => $request->modalitas1,
            'modalitas2' => $request->modalitas2,
            'modalitas3' => $request->modalitas3,
        ]);

        return redirect()->route('isi_nanti')->with('success','Pendaftaran berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $PendaftaranPemeriksaan->delete();

        return redirect()->route('isi_nanti')->with('success','Pendaftaran berhasil dihapus');

    }
}
