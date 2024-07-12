<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranPemeriksaan;
use App\Models\DetailPendaftaranPemeriksaan;
use App\Models\Pasien;
use App\Models\MasterJenisPemeriksaan;
use Illuminate\Support\Facades\Auth;

class PendaftaranPemeriksaanController extends Controller
{
    public function detailWithPendaftaran(){
    $idUser = Auth::id();

    $detailWithPendaftaran = DetailPendaftaranPemeriksaan::join('pendaftaran_pemeriksaan', 'detail_pendaftaran.noPendaftaran', '=', 'pendaftaran_pemeriksaan.nomorPendaftaran')
        ->join('pasien', 'pendaftaran_pemeriksaan.idPasien', '=', 'pasien.idPasien')
        ->where('pasien.idUser', $idUser)
        ->get(['pendaftaran_pemeriksaan.*', 'detail_pendaftaran.*', 'pasien.idUser']);

    $detailWithMasterPemeriksaan = MasterJenisPemeriksaan::join('detail_pendaftaran', 'detail_pendaftaran.kodeJenisPemeriksaan', '=', 'master_jenis_pemeriksaan.kodeJenisPemeriksaan')
        ->join('pendaftaran_pemeriksaan', 'detail_pendaftaran.noPendaftaran', '=', 'pendaftaran_pemeriksaan.nomorPendaftaran')
        ->join('pasien', 'pendaftaran_pemeriksaan.idPasien', '=', 'pasien.idPasien')
        ->where('pasien.idUser', $idUser)
        ->get(['detail_pendaftaran.*', 'master_jenis_pemeriksaan.namaJenisPemeriksaan', 'pasien.idUser']);

    $pasienWithPendaftaran = Pasien::join('pendaftaran_pemeriksaan', 'pasien.idPasien', '=', 'pendaftaran_pemeriksaan.idPasien')
        ->where('pasien.idUser', $idUser)
        ->get(['pendaftaran_pemeriksaan.*', 'pasien.*']);

    $mergedDetails = $detailWithPendaftaran->map(function ($item) use ($detailWithMasterPemeriksaan, $pasienWithPendaftaran) {
        $master = $detailWithMasterPemeriksaan->firstWhere('kodeJenisPemeriksaan', $item->kodeJenisPemeriksaan);
        $pasien = $pasienWithPendaftaran->firstWhere('idPasien', $item->idPasien);

        $item->namaJenisPemeriksaan = $master ? $master->namaJenisPemeriksaan : null;
        $item->namaPasien = $pasien ? $pasien->namaPasien : null; // Assuming you want to show namaPasien instead of idPasien
        return $item;
    });
        
        return view('pasien.list-pemeriksaan-pasien', compact('mergedDetails'));
     }


     public function index()
    {
        //
        $pendaftaran = PendaftaranPemeriksaan::all();
        
        return view('pasien.list-pemeriksaan-pasien', compact('pendaftaran'));
    }

    public function create()
    {
        //
    }

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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

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
