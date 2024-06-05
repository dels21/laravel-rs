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

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'namaModalitas' => 'required|max:255',
                'jenisModalitas' => '',
                'merekModalit   as' => '',
                'nomorSeriModalitas' => '',
                'alamatIp' => '',
                'kodeRuang' => '',
            ]
            );
            Modalitas::create($request->all());
            return redirect()->route('dashboard');
    }

    public function edit(Request $request)
    {
        
    }
}
