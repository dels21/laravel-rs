<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TransaksiPemeriksaan;
use App\Models\PendaftaranPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\User;

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

    
}
