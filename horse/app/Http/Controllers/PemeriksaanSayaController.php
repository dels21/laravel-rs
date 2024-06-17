<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemeriksaanSayaController extends Controller
{
    public function showPemeriksaanSaya()
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Ensure the user is authenticated
        if ($user) {
            // Retrieve the user's transactions through the relationship defined in the model
            $transactions = $user->transaksiPemeriksaans;
        } else {
            // If no user is authenticated, set transactions to an empty collection
            $transactions = collect();
        }

        // Pass the transactions to the view
        return view('pasien.list-pemeriksaan-pasien', compact('transactions'));
    }
}