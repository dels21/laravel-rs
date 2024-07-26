<?php

namespace App\Http\Controllers;

use App\Models\DetailPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\PendaftaranPemeriksaan;
use App\Models\TransaksiPemeriksaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemeriksaanDokterController extends Controller
{

    public function showDetail($id) {
        $detail = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*', 'dp.*')
            ->join('detail_pemeriksaan as dp', 'dp.nomorPemeriksaan', '=', 'transaksi_pemeriksaan.nomorPemeriksaan')
            ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
            ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
            ->join('users as u', 'u.id', '=', 'p.idUser')
            ->where('dp.nomorPemeriksaan', '=', $id)
            ->paginate(10);

        return view('dokter.detail-pemeriksaan-dokter', compact('detail'));
    }

    public function showData()
    {
        // Assuming you have some way of getting the logged-in user ID, let's say $loggedInUserId
        // dd(Auth::user()->id);
        $loggedInUserId = Auth::user()->id;// This assumes you're using Laravel's authentication


        // Fetch the data using Eloquent relationships
        $data = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*', 'u.id', 'd.*')
                ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
                ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
                ->join('dokter as d', 'd.idDokter', '=', 'transaksi_pemeriksaan.idKaryawanDokterRadiologi')
                ->join('users as u', 'u.id', '=', 'p.idUser')
                // ->with('pendaftaranPemeriksaan.detailPendaftaran') // Eager load detailPendaftaran relationship
                ->where('d.idUser', $loggedInUserId)
                ->paginate(10);

        // dd($data);
        return view('dokter.list-pemeriksaan-dokter', compact('data', 'loggedInUserId'));
    }

    public function editDetail($id){
        $details = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*', 'dp.*', 'p.*', 'dpp.*', 'jp.*')
            ->join('detail_pemeriksaan as dp', 'dp.nomorPemeriksaan', '=', 'transaksi_pemeriksaan.nomorPemeriksaan')
            ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
            ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
            ->join('users as u', 'u.id', '=', 'p.idUser')
            ->join('detail_pendaftaran as dpp', 'dpp.noPendaftaran', '=', 'pp.nomorPendaftaran')
            ->join('master_jenis_pemeriksaan as jp', 'jp.kodeJenisPemeriksaan', '=', 'dpp.kodeJenisPemeriksaan')
            ->where('dp.idDetailPemeriksaan', '=', $id)
            ->paginate(10);
            $detail = $details->first();
            // dd($details);
        return view('dokter.form_detail', compact('detail'));
    }

    public function updateDiagnosis(Request $request)
    {

    $request->validate([
        'hasilPemeriksaan' => 'required|string',
    ], [
        'hasilPemeriksaan.required' => 'Hasil Pemeriksaan wajib diisi.',
    ]);

    $hasilPemeriksaan = $request->input('hasilPemeriksaan');
    $id = $request->input('id');

    $detailPemeriksaan = DetailPemeriksaan::find($id);

    // dd($detailPemeriksaan);
    if ($detailPemeriksaan) {
        $detailPemeriksaan->keterangan = $hasilPemeriksaan;
        $detailPemeriksaan->save();
        return redirect()->route('detail_pemeriksaan_dokter', $detailPemeriksaan->nomorPemeriksaan)->with('success', 'Hasil pemeriksaan berhasil diperbarui.');
    }
}

}
