<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dokter = Dokter::all();

        return view('karyawan.list-dokter', compact('dokter'));
    }


    public function dokterFromUser()
    {

        $dokterFromUser = User::join('dokter', 'users.id', '=', 'dokter.idUser')
            ->where('users.role', 'dokter')
            ->get(['users.*', 'dokter.*']);
        // dd($dokterFromUser->all());

        return view('karyawan.list-dokter', compact('dokterFromUser'));
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
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dokter'
        ]);
        // dd($user->role);

        $userId = $user->id;
        // dd($userId);

        Dokter::create([
            'idDokter'=>$request->idDokter,
            'idUser'=>$userId,
            'idKtp'=>$request->idKtp,
            'jenisKelamin'=>$request->jenisKelamin,
            'tanggalLahir'=>$request->tanggalLahir,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'nomorHp'=>$request->nomorHp,
            'nomorTelpRumah'=>$request->nomorTelpRumah
        ]);

        return redirect()->route('show_list_dokter')->with('success','Dokter berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        //

        // dd($request->all());
        $dokter = Dokter::findOrFail($request->idDokter,);

        $dokter->update([
            'idKtp'=>$request->idKtp,
            'jenisKelamin'=>$request->jenisKelamin,
            'tanggalLahir'=>$request->tanggalLahir,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'nomorHp'=>$request->nomorHp,
            'nomorTelpRumah'=>$request->nomorTelpRumah
        ]);

        return redirect()->route('show_list_dokter')->with('success','Dokter berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->idUser);
        $dokter = Dokter::where('idUser', $request->idUser);

        $dokter->delete();
        $user->delete();

        return redirect()->route('show_list_dokter')->with('success','Dokter berhasil dihapus');
    }

}
