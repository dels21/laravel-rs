<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPemeriksaan;
use Illuminate\Http\Request;

class TransaksiPemeriksaanController extends Controller
{
    public function index()
    {
        return view('dashboard',  ['user' => 'karyawan', 'page' => 'list-pemeriksaan']);  
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'nomorPendaftaran' => 'required|max:255',
                'idKaryawanRadiografer' => '',
                'idKaryawanDokterRadiologi' => '',
                'namaDokterPengirim' => '',
                'tanggalPemeriksaan' => '',
                'diagnosis' => '',
                'keterangan' => '',
            ]
            );
            TransaksiPemeriksaan::create($request->all());
            return redirect()->route('dashboard');
    }

    public function show (Request $request)
    {

    }

    public function edit(Request $request, TransaksiPemeriksaan $transaksipemeriksaan)
    {
        $transaksipemeriksaan->update([
            'nomorPendaftaran' => $request->nomorPendaftaran,
            'idKaryawanRadiografer' => $request->idKaryawanRadiografer,
            'idKaryawanDokterRadiologi' => $request->idKaryawanRadiologi,
            'namaDokterPengirim' => $request->namaDokterPengirim,
            'tanggalPemeriksaan' => $request->tanggalPemeriksaan,
            'diagnosis' => $request->diagnosis,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('dashboard')->with('success', 'Modalitas berhasil diubah');
    }

    public function destroy(TransaksiPemeriksaan $transaksiPemeriksaan)
    {
        $transaksiPemeriksaan->delete();

        return redirect()->route('dashboard')->with('success', 'Transaksi Pemeriksaan berhasil dihapus');
    }
}
