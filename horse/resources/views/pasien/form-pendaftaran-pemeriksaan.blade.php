@extends('layouts.app')
@section('title', 'Daftar Pemeriksaan')
@section('setAktifDaftarPemeriksaan', 'active')

@section('content')
    <div class="container" style="margin: 0 0 0 9.375rem;">
        <h1 class="title">Surat Daftar Pemeriksaan</h1>

        <form action="{{ route('pasien.store-pemeriksaan') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="noPemeriksaan" class="form-label">No. Pendaftaran</label>
                        <input type="text" class="form-control" id="noPemeriksaan" name="noPemeriksaan" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="idPasien" class="form-label">Pasien</label>
                        <input type="text" class="form-control" id="idPasien" name="idPasien">
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Attachment</label>
                        <input type="file" class="form-control" id="attachment" name="attachment">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="idDokter" class="form-label">Dokter Pengirim</label>
                        <input type="text" class="form-control" id="idDokter" name="idDokter">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="modalitas" class="form-label">Modalitas</label>
                        <select class="form-select" id="modalitas" name="modalitas" aria-label="Pilih modalitas">
                            <option value="">Pilih modalitas</option>
                            <option value="MRI">MRI</option>
                            <option value="CT Scan">CT Scan</option>
                            <option value="Ultrasound">Ultrasound</option>
                            <option value="Rontgen">Rontgen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modalitas" class="form-label">Modalitas</label>
                        <select class="form-select" id="modalitas" name="modalitas" aria-label="Pilih modalitas">
                            <option value="">Pilih modalitas</option>
                            <option value="MRI">MRI</option>
                            <option value="CT Scan">CT Scan</option>
                            <option value="Ultrasound">Ultrasound</option>
                            <option value="Rontgen">Rontgen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modalitas" class="form-label">Modalitas</label>
                        <select class="form-select" id="modalitas" name="modalitas" aria-label="Pilih modalitas">
                            <option value="">Pilih modalitas</option>
                            <option value="MRI">MRI</option>
                            <option value="CT Scan">CT Scan</option>
                            <option value="Ultrasound">Ultrasound</option>
                            <option value="Rontgen">Rontgen</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" min="0"
                            placeholder="Masukkan harga modalitas">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" min="0"
                            placeholder="Masukkan harga modalitas">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" min="0"
                            placeholder="Masukkan harga modalitas">
                    </div>
                </div>

            </div>
            <div class="row my-2">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection
