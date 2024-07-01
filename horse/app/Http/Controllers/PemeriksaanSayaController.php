<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemeriksaanSayaController extends Controller
{
    public function showPemeriksaanSaya(){
        $user = Auth::user();

        $userProfile = User::where('id', $user->id)->first();

        if ($userProfile) {
            $transactions = $userProfile->transactions;
        } else {
            $transactions = collect();
        }

        return view('pasien.list-pemeriksaan-pasien', compact('transactions'));
    }
}
