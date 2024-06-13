<?php

namespace App\Http\Controllers;

use App\Models\MasterDicom;
use App\Models\Modalitas;
use Illuminate\Http\Request;

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
                'namaModalitas' => 'required|max:255',
                'jenisModalitas' => '',
                'merekModalitas' => '',
                'nomorSeriModalitas' => '',
                'alamatIp' => '',
                'kodeRuang' => '',
            ]
            );
            Modalitas::create($request->all());
            return redirect()->route('show_modalitas');
    }

    public function show (Request $request)
    {

    }

    public function edit(Request $request, Modalitas $modalitas)
    {
        $modalitas->update([
            'namaModalitas' => $request->namaModalitas,
            'jenisModalitas' => $request->jenisModalitas,
            'merekModalitas' => $request->merekModalitas,
            'nomorSeriModalitas' => $request->nomorSeriModalitas,
            'alamatIp' => $request->alamatIp,
            'kodeRuang' => $request->kodeRuang,
        ]);
        return redirect()->route('dashboard')->with('success', 'Modalitas berhasil diubah');
    }

    public function destroy($kodeModalitas)
    {
        // $modalitas = Modalitas::findOrFail($request->kodeModalitas);
        Modalitas::destroy($kodeModalitas);

        return redirect()->route('show_modalitas')->with('success', 'Modalitas berhasil dihapus');
    }
}
