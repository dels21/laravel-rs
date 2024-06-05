<?php

namespace App\Http\Controllers;

use App\Models\MasterDicom;
use Illuminate\Http\Request;

class DicomController extends Controller
{
    public function index()
    {
        return view('dashboard',  ['user' => 'karyawan', 'page' => 'list-DICOM']);  
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'netMask' => 'required|max:255',
                'layananDicom' => '',
                'peran' => '',
                'aet' => '',
                'port' => '',
            ]
            );
            MasterDicom::create($request->all());
            return redirect()->route('dashboard');
    }

    public function show (Request $request)
    {

    }

    public function edit(Request $request, MasterDicom $dicom)
    {
        $dicom->update([
            'netMask' => $request->namaModalitas,
            'layananDicom' => $request->jenisModalitas,
            'peran' => $request->merekModalitas,
            'aet' => $request->nomorSeriModalitas,
            'port' => $request->alamatIp,
        ]);
        return redirect()->route('dashboard')->with('success', 'Dicom berhasil diubah');
    }

    public function destroy(MasterDicom $dicom)
    {
        $dicom->delete();

        return redirect()->route('dashboard')->with('success', 'Dicom berhasil dihapus');
    }
}