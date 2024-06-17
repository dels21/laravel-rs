<?php

namespace App\Http\Controllers;

use App\Models\MasterDicom;
use App\Models\Modalitas;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModalitasController extends Controller
{
    public function showModalitas()
    {
        // $modalitasDicom = MasterDicom::join('master_modalitas', 'master_dicom.alamatIp', '=', 'master_modalitas.alamatIp')
        // ->where('master_dicom.alamatIp', 'master_modalitas')
        // ->get(['master_dicom.*', 'master_modalitas.*']);

        $modalitasDicom = Modalitas::latest()->paginate(10);
        return view('karyawan.list-modalitas', compact('modalitasDicom'));
    }
    public function index()
    {
        return view('dashboard',  ['user' => 'karyawan', 'page' => 'list-modalitas']);
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'namaModalitas' => 'required|min:5',
                'jenisModalitas' => 'required',
                'merekModalitas' => 'required',
                'nomorSeriModalitas' => 'required',
                'alamatIp' => 'required',
                'kodeRuang' => 'required',
            ]
            );
            Modalitas::create($request->all());
            return redirect()->route('show_modalitas');
    }

    public function show (Request $request)
    {

    }

    public function edit(Request $request)
    {
        // dd($request->all());
        $modalitas = Modalitas::findOrFail($request->kodeModalitas);
        $modalitas->update([
            'namaModalitas' => $request->namaModalitas,
            'jenisModalitas' => $request->jenisModalitas,
            'merekModalitas' => $request->merekModalitas,
            'nomorSeriModalitas' => $request->nomorSeriModalitas,
            'alamatIp' => $request->alamatIp,
            'kodeRuang' => $request->kodeRuang,
        ]);
        return redirect()->route('show_modalitas')->with('success', 'Modalitas berhasil diubah');
    }
    // public function update_pasien(Request $request)
    // {
    //     // dd($request->all());

    //     $user = User::findOrFail($request->idUser);

    //     $pasien = Pasien::where('idUser', $request->idUser);
    //     $updateData = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ];

    //     // Conditionally update password if provided


    //     $user->update($updateData);
    //     $pasien->update([
    //         'tempatLahir' =>$request->tempatLahir,
    //         'tanggalLahir' =>$request->tanggalLahir,
    //         'noIdentitas' =>$request->noIdentitas,
    //         'nomorRumah' =>$request->nomorRumah,
    //         'nomorHp' =>$request->nomorHp,
    //         'namaKontakDarurat' =>$request->namaKontakDarurat,
    //         'nomorDarurat' =>$request->nomorDarurat,
    //         'kewarganegaraan' =>$request->kewarganegaraan,
    //         'alergi' =>$request->alergi,
    //         'golonganDarah' =>$request->golonganDarah,
    //         'tinggiBadan' =>$request->tinggiBadan,
    //         'beratBadan' =>$request->beratBadan
    //     ]);


    //     return redirect()->route('show_list_pasien')->with('success','Pasien berhasil diupdate');
    // }


    public function destroy($kodeModalitas)
    {


        Modalitas::destroy($kodeModalitas);

        return redirect()->route('show_modalitas')->with('success', 'Modalitas berhasil dihapus');
    }
}
