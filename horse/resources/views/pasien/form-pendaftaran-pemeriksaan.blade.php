@section('title', 'Daftar Pemeriksaan')
@section('setAktifDaftarPemeriksaan', 'active')

@section('ListDaftarPemeriksaan')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/root/style.css">
    <div class="container" style="width: 700rem">
        <h1 class="title">Surat Daftar Pemeriksaan</h1>

        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="noPemeriksaan" class="form-label">No. Pemeriksaan</label>
                        <input type="text" class="form-control" id="noPemeriksaan" name="noPemeriksaan">
                    </div>
                    <div class="mb-3">
                        <label for="namaPasien" class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" id="namaPasien" name="namaPasien">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                    </div>
                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label> <br>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="jenisKelaminLaki" name="jenisKelamin"
                                    value="L" checked>
                                <label class="form-check-label" for="jenisKelaminLaki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="jenisKelaminPerempuan"
                                    name="jenisKelamin" value="P">
                                <label class="form-check-label" for="jenisKelaminPerempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Permohonan Permintaan" class="form-label">Permohonan Permintaan</label> <br>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" id="jenisKelaminPemohonLaki"
                                    name="jenisKelaminPemohon" value="LPemohon" checked>
                                <label class="form-check-label" for="jenisKelaminPemohonLaki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="jenisKelaminPemohonPerempuan"
                                    name="jenisKelaminPemohon" value="PPemohon">
                                <label class="form-check-label" for="jenisKelaminPemohonPerempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Permohonan Hasil" class="form-label">Permohonan Hasil</label> <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="hasilKeDokter" name="hasilKeDokter"
                                value="hasilKeDokter" checked>
                            <label class="form-check-label" for="hasilKeDokter">Hasil diserahkan ke dokter</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="hasilKePasien" name="hasilKePasien"
                                value="hasilKePasien">
                            <label class="form-check-label" for="hasilKePasien">Hasil diserahkan ke pasien</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="teleponMobile" class="form-label">Telepon Mobile</label>
                        <input type="text" class="form-control" id="teleponMobile" name="teleponMobile">
                    </div>
                    <div class="mb-3">
                        <label for="teleponDarurat" class="form-label">Telepon Darurat</label>
                        <input type="text" class="form-control" id="teleponDarurat" name="teleponDarurat">
                    </div>
                    <div class="mb-3">
                        <label for="dokterPengirim" class="form-label">Dokter Pengirim</label>
                        <input type="text" class="form-control" id="dokterPengirim" name="dokterPengirim">
                    </div>
                    <div class="mb-3">
                        <label for="dokterPengirim" class="form-label">Dokter Pengirim</label>
                        <input type="text" class="form-control" id="dokterPengirim" name="dokterPengirim">
                    </div>
                    <div class="mb-3">
                        <label for="ruangan" class="form-label">Ruangan</label>
                        <input type="text" class="form-control" id="ruangan" name="ruangan">
                    </div>
                    <div class="mb-3">
                        <label for="teleponDokter" class="form-label">Telepon Dokter</label>
                        <input type="text" class="form-control" id="teleponDokter" name="teleponDokter">
                    </div>
                    <div class="mb-3">
                        <label for="diagnosa" class="form-label">Diagnosa</label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa">
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
