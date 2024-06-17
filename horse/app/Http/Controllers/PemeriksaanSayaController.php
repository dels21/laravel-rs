<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPemeriksaan;
use App\Models\PendaftaranPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\User;

class PemeriksaanSayaController extends Controller
{
    public function showData(Request $request)
    {
        // Assuming you have some way of getting the logged-in user ID, let's say $loggedInUserId
        $loggedInUserId = $request->user()->id; // This assumes you're using Laravel's authentication

        // Fetch the data using Eloquent relationships
        $data = TransaksiPemeriksaan::select('transaksi_pemeriksaan.*', 'pp.*', 'u.*')
    ->join('pendaftaran_pemeriksaan as pp', 'transaksi_pemeriksaan.nomorPendaftaran', '=', 'pp.nomorPendaftaran')
    ->join('pasien as p', 'p.idPasien', '=', 'pp.idPasien')
    ->join('users as u', 'u.id', '=', 'p.idUser')
    // ->with('pendaftaranPemeriksaan.detailPendaftaran') // Eager load detailPendaftaran relationship
    ->where('u.id', '=', $loggedInUserId)
    ->get();


        return view('pasien.list-pemeriksaan-pasien', ['data' => $data]);
    }
}
