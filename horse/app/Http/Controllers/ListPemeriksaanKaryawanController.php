<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPemeriksaan;
use App\Models\DetailPemeriksaan;
use App\Models\PendaftaranPemeriksaan;

class ListPemeriksaanKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = TransaksiPemeriksaan::join('detail_pemeriksaan', 'detail_pemeriksaan.nomorPemeriksaan', '=', 'transaksi_pemeriksaan.nomorPemeriksaan')
            ->join('pendaftaran_pemeriksaan', 'pendaftaran_pemeriksaan.nomorPendaftaran', '=', 'transaksi_pemeriksaan.nomorPendaftaran')
            ->select(['transaksi_pemeriksaan.nomorPendaftaran as noPendaftaran', 'transaksi_pemeriksaan.nomorPemeriksaan as noPemeriksaan', 'transaksi_pemeriksaan.tanggalPemeriksaan as tanggal', 'pendaftaran_pemeriksaan.idPasien as idPasien', 'transaksi_pemeriksaan.idKaryawanRadiografer as idRadio', 'transaksi_pemeriksaan.idKaryawanDokterRadiologi as idDokter', 'detail_pemeriksaan.jamMulaiPemeriksaanAlat as jamMulai', 'detail_pemeriksaan.jamSelesaiPemeriksaanAlat as jamSelesai', 'detail_pemeriksaan.ruangan as ruangan', 'detail_pemeriksaan.status as status'])
            ->paginate(10);

        return view('karyawan.list-pemeriksaan-karyawan', compact('data'));
    }

    public function show($id)
    {
        $detail = TransaksiPemeriksaan::findOrFail($id);
        return response()->json($detail);
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
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function recentPemeriksaan()
    {
        $data = TransaksiPemeriksaan::join('detail_pemeriksaan', 'detail_pemeriksaan.nomorPemeriksaan', '=', 'transaksi_pemeriksaan.nomorPemeriksaan')
            ->join('pendaftaran_pemeriksaan', 'pendaftaran_pemeriksaan.nomorPendaftaran', '=', 'transaksi_pemeriksaan.nomorPendaftaran')
            ->orderBy('transaksi_pemeriksaan.tanggalPemeriksaan', 'desc')
            ->take(10)
            ->get(['transaksi_pemeriksaan.nomorPendaftaran as noPendaftaran', 'transaksi_pemeriksaan.nomorPemeriksaan as noPemeriksaan', 'transaksi_pemeriksaan.tanggalPemeriksaan as tanggal', 'pendaftaran_pemeriksaan.idPasien as idPasien', 'transaksi_pemeriksaan.idKaryawanRadiografer as idRadio', 'transaksi_pemeriksaan.idKaryawanDokterRadiologi as idDokter', 'detail_pemeriksaan.jamMulaiPemeriksaanAlat as jamMulai', 'detail_pemeriksaan.jamSelesaiPemeriksaanAlat as jamSelesai', 'detail_pemeriksaan.ruangan as ruangan', 'detail_pemeriksaan.status as status']);

        return $data;
    }
}
