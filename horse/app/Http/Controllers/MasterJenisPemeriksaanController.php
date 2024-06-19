<?php

namespace App\Http\Controllers;

use App\Models\MasterJenisPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MasterJenisPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'kodeModalitas' => 'required|min:5',
                'namaJenisPemeriksaan' => 'required',
                'kelompokJenisPemeriksaan' => 'required',
                'pemakaianKontras' => 'required',
                'lamaPemeriksaan' => 'required',
                'kodeRuang' => 'required',
            ]
            );
            MasterJenisPemeriksaan::create($request->all());
            return redirect()->route('show_jenis_pemeriksaan');
    }
    public function show()
    {
        $joinKodeModalitas = DB::table('master_modalitas')
        ->select('*')
        ->get();

        $showJenisPemeriksaan = MasterJenisPemeriksaan::latest()->paginate(10);
        return view('karyawan.list-jenis-pemeriksaan', compact('showJenisPemeriksaan', 'joinKodeModalitas'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodeJenisPemeriksaan)
    {
        MasterJenisPemeriksaan::destroy($kodeJenisPemeriksaan);

        return redirect()->route('show_jenis_pemeriksaan')->with('success', 'Jenis Pemeriksaan berhasil dihapus');
    }
}
