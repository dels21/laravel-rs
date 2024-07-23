<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TransaksiPemeriksaan;
use App\Models\PendaftaranPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\User;

class PemeriksaanSayaController extends Controller
{
    public function showDetail($id) {
        $dataId = Auth::user()->id;
        $dataExists = Pasien::where('idUser', $dataId)->exists();
        $detail = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*', 'dp.*')
            ->join('detail_pemeriksaan as dp', 'dp.nomorPemeriksaan', '=', 'transaksi_pemeriksaan.nomorPemeriksaan')
            ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
            ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
            ->join('users as u', 'u.id', '=', 'p.idUser')
            ->where('dp.nomorPemeriksaan', '=', $id)
            ->paginate(10);


            return view('pasien.detail-pemeriksaan-pasien', compact('detail', 'dataExists'));
        }

        public function showData(Request $request)
        {
            $dataId = Auth::user()->id;
            $dataExists = Pasien::where('idUser', $dataId)->exists();
            // Assuming you have some way of getting the logged-in user ID, let's say $loggedInUserId
            $loggedInUserId = Auth::user()->id;// This assumes you're using Laravel's authentication

            // Fetch the data using Eloquent relationships
            $data = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*')
            ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
            ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
            ->join('users as u', 'u.id', '=', 'p.idUser')
            // ->with('pendaftaranPemeriksaan.detailPendaftaran') // Eager load detailPendaftaran relationship
            ->where('u.id', '=', $loggedInUserId)
            ->paginate(10);


            // dd($data);
            return view('pasien.list-pemeriksaan-pasien', ['data' => $data, 'dataExists' => $dataExists, 'loggedInUserId' => $loggedInUserId]);
    }


}
