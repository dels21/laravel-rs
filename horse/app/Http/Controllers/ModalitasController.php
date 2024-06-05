<?php

namespace App\Http\Controllers;

use App\Models\Modalitas;
use Illuminate\Http\Request;

class ModalitasController extends Controller
{
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
            return redirect()->route('dashboard');
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

    public function destroy(Modalitas $modalitas)
    {
        $modalitas->delete();

        return redirect()->route('dashboard')->with('success', 'Modalitas berhasil dihapus');
    }
}
