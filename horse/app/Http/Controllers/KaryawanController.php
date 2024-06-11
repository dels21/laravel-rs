<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                
        $karyawan = Karyawan::all();

        return view('isi_nanti', compact('karyawan'));
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
    public function store(int $userId, Request $request)
    {
        Karyawan::create([
            'idKaryawan'=>$request->idDokter,
            'idUser'=>$userId,
            'idKtp'=>$request->idKtp,
            'jenisKelamin'=>$request->jenisKelamin,
            'tanggalLahir'=>$request->tanggalLahir,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'nomorHp'=>$request->nomorHp,
            'nomorTelpRumah'=>$request->nomorTelpRumah
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
                //
        $karyawan->update([
            'idKaryawan'=>$request->idKaryawan,
            'idKtp'=>$request->idKtp,
            'jenisKelamin'=>$request->jenisKelamin,
            'tanggalLahir'=>$request->tanggalLahir,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'nomorHp'=>$request->nomorHp,
            'nomorTelpRumah'=>$request->nomorTelpRumah
        ]);

        return redirect()->route('isi_nanti')->with('success','Karyawan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('isi_nanti')->with('success','Karyawan berhasil dihapus');
    }

    public function showListKaryawan()
    {
        $usersWithKaryawan = User::join('karyawan', 'users.id', '=', 'karyawan.idUser')
            ->where('users.role', 'karyawan')
            ->get(['users.*', 'karyawan.*']);
            // dd($usersWithKaryawan->all());    
        return view('admin.list-karyawan', compact('usersWithKaryawan'));
    }


}
