<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\MasterJenisPemeriksaan;

class PendaftaranPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct(PendaftaranPemeriksaanController $pendaftaranController){
    //     $this->pendaftaranController = $pendaftaranController;
    // }

    public function detailWithPendaftaran(){
        $detailWithPendaftaran = DetailPendaftaranPemeriksaan::join('pendaftaran_pemeriksaan', 'detail_pendaftaran.noPendaftaran', '=', 'pendaftaran_pemeriksaan.nomorPendaftaran')
        ->get(['pendaftaran_pemeriksaan.*', 'detail_pendaftaran.*']);

        $detailWithMasterPemeriksaan = MasterJenisPemeriksaan::join('detail_pendaftaran', 'detail_pendaftaran.kodeJenisPemeriksaan', '=', 'master_jenis_pemeriksaan.kodeJenisPemeriksaan')
        ->get(['detail_pendaftaran.*', 'master_jenis_pemeriksaan.namaJenisPemeriksaan']);

        $pasienWithPendaftaran = Pasien::join('pendaftaran_pemeriksaan', 'pasien.idPasien', '=', 'pendaftaran_pemeriksaan.idPasien')
        ->get(['pendaftaran_pemeriksaan.*', 'pasien.*']);

        $mergedDetails = $detailWithPendaftaran->map(function ($item) use ($detailWithMasterPemeriksaan, $pasienWithPendaftaran) {
        $master = $detailWithMasterPemeriksaan->firstWhere('kodeJenisPemeriksaan', $item->kodeJenisPemeriksaan);
        $pasien = $pasienWithPendaftaran->firstWhere('idPasien', $item->idPasien);

        $item->namaJenisPemeriksaan = $master ? $master->namaJenisPemeriksaan : null;
        $item->namaPasien = $pasien ? $pasien->idPasien : null; 
        return $item;
    });
        
        return view('pasien.list-pemeriksaan-pasien', compact('mergedDetails'));
     }

    //  public function pasienWithPendaftaran(){
    //     $pasienWithPendaftaran = Pasien::join('pendaftaran_pemeriksaan', 'pasien.idPasien', '=', 'pendaftaran_pemeriksaan.idPasien')
    //         // ->where('users.role', 'pasien')
    //         ->get(['pendaftaran_pemeriksaan.*', 'pasien.*']);
       
       
    //     return view('pasien.list-pemeriksaan-pasien', compact('pasienWithPendaftaran',''));
    //  }

     public function index()
    {
        //
        $pendaftaran = PendaftaranPemeriksaan::all();
        
        return view('pasien.list-pemeriksaan-pasien', compact('pendaftaran'));
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
        PendaftaranPemeriksaan::create([
            'noPemeriksaan' => $request->noPemeriksaan,
            'namaPasien' => $request->namaPasien,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'jenisKelaminPemohon' => $request->jenisKelaminPemohon,
            'hasilKeDokter' => $request->hasilKeDokter,
            'tanggal' => $request->tanggal,
            'teleponMobile' => $request->teleponMobile,
            'teleponDarurat' => $request->teleponDarurat,
            'dokterPengirim' => $request->dokterPengirim,
            'ruangan' => $request->ruangan,
            'teleponDokter' => $request->teleponDokter,
            'diagnosa' => $request->diagnosa,
            'modalitas1' => $request->modalitas1,
            'modalitas2' => $request->modalitas2,
            'modalitas3' => $request->modalitas3,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        PendaftaranPemeriksaan::update([
            'noPemeriksaan' => $request->noPemeriksaan,
            'namaPasien' => $request->namaPasien,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'jenisKelaminPemohon' => $request->jenisKelaminPemohon,
            'hasilKeDokter' => $request->hasilKeDokter,
            'tanggal' => $request->tanggal,
            'teleponMobile' => $request->teleponMobile,
            'teleponDarurat' => $request->teleponDarurat,
            'dokterPengirim' => $request->dokterPengirim,
            'ruangan' => $request->ruangan,
            'teleponDokter' => $request->teleponDokter,
            'diagnosa' => $request->diagnosa,
            'modalitas1' => $request->modalitas1,
            'modalitas2' => $request->modalitas2,
            'modalitas3' => $request->modalitas3,
        ]);

        return redirect()->route('isi_nanti')->with('success','Pendaftaran berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $PendaftaranPemeriksaan->delete();

        return redirect()->route('isi_nanti')->with('success','Pendaftaran berhasil dihapus');

    }
}
