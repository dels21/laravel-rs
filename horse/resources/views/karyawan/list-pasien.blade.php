{{-- @dd($pasien) --}}

@extends('layouts.app')
@section('title', 'Manage Pasien')
@section('setAktifListPasien', 'active')

@section('customCSS')

    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="biggest-font mt-5 mb-5">Pasien</h1>

        <!-- DataTales Example -->
        <div class="col d-flex" style="margin-top: 1.5rem; margin-bottom: 2.5rem">
            <button type="button" class="btn btn-primary d-flex align-items-center justify-content-center"
                style="width: 7.5rem;" data-toggle="modal" data-target="#myModal" id="addPasienBtn">
                <i class="bi bi-plus-lg me-2"></i> Tambah
            </button>
            <button type="button" class="btn btn-danger mx-2 d-flex align-items-center justify-content-center"
                style="width: 7.5rem;">
                <i class="bi bi-trash3-fill me-2"></i> Hapus
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="h1-title-600 w-100 text-center" id="myExtraLargeModalLabel">Tambah Pasien</h1>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('store_pasien') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaPasien" class="col-sm-4 col-form-label">Nama Pasien:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaPasien" name="name" placeholder="Masukkan Nama Pasien">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpRumah" class="col-sm-4 col-form-label">Telp Rumah:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpRumah" name="nomorRumah" placeholder="Masukkan Telp Rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglLahir" class="col-sm-4 col-form-label">Tgl Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglLahir" name="tanggalLahir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoIdentitas" class="col-sm-4 col-form-label">No Identitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoIdentitas" name="noIdentitas" placeholder="No Identitas">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTipeIdentitas" class="col-sm-4 col-form-label">Tipe Identitas:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputTipeIdentitas" name="tipeIdentitas">
                                            <option value="KTP">KTP</option>
                                            <option value="Paspor">Paspor</option>
                                            <option value="SIM">SIM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKota" class="col-sm-4 col-form-label">Kota:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputKota" name="kota" placeholder="Masukkan Kota">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukkan Alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPekerjaan" class="col-sm-4 col-form-label">Pekerjaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputStatusKawin" class="col-sm-4 col-form-label">Status Kawin:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputStatusKawin" name="statusPerkawinan">
                                            <option value="menikah">Menikah</option>
                                            <option value="tidak menikah">Tidak Menikah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNomorRumah" class="col-sm-4 col-form-label">Nomor Rumah:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNomorRumah" name="nomorRumah" placeholder="Masukkan Nomor Rumah">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpHP" class="col-sm-4 col-form-label">Telp HP:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpHP" name="nomorHp" placeholder="Masukkan Telp HP">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaKontakDarurat" class="col-sm-4 col-form-label">Nama Kontak Darurat:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaKontakDarurat" name="namaKontakDarurat" placeholder="Masukkan Nama Kontak Darurat">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpDarurat" class="col-sm-4 col-form-label">Telp Darurat:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpDarurat" name="nomorDarurat" placeholder="Masukkan Telp Darurat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputWargaNegara" class="col-sm-4 col-form-label">Warga Negara:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputWargaNegara" name="kewarganegaraan" placeholder="Masukkan Warga Negara">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTanggalDaftar" class="col-sm-4 col-form-label">Tanggal Daftar:</label>
                                    <input id="tanggalDaftar" class="block mt-1 w-full form-control" type="date" name="tanggalDaftar" value="{{ now()->format('Y-m-d') }}" required autofocus autocomplete="tanggalDaftar" placeholder="DD/MM/YYYY" disabled>
                                    <input type="hidden" name="tanggalDaftar" value="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAlergi" class="col-sm-4 col-form-label">Alergi:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputAlergi" name="alergi" placeholder="Masukkan Alergi">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputGolonganDarah" class="col-sm-4 col-form-label">Golongan Darah:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputGolonganDarah" name="golonganDarah">
                                            <option value="A+">
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                                <option value="AB+">AB+</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="B-">B-</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex align-items-center">
                                        <label for="inputTinggiBadan" class="col-sm-4 col-form-label">Tinggi Badan:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="inputTinggiBadan" name="tinggiBadan" placeholder="Masukkan Tinggi Badan">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 d-flex align-items-center">
                                        <label for="inputBeratBadan" class="col-sm-4 col-form-label">Berat Badan:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="inputBeratBadan" name="beratBadan" placeholder="Masukkan Berat Badan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex align-items-center">
                                        <label for="inputEmail" class="col-sm-4 col-form-label">Email:</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukkan Email">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 d-flex align-items-center">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Password:</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Masukkan Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex align-items-center">
                                        <label class="col-sm-4 col-form-label">Jenis Kelamin:</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderMale" value="laki">
                                                <label class="form-check-label" for="genderMale">Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenisKelamin" id="genderFemale" value="perempuan">
                                                <label class="form-check-label" for="genderFemale">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-4">
                                    <div class="col-auto">
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pasien</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usersWithPasien as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->idPasien}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->tanggalDaftar}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <i class="bi bi-pencil-square edit-btn"
                                            data-toggle="modal"
                                            data-target="#myModal"
                                            data-id="{{$item->id}}"
                                            data-namapasien="{{$item->name}}"
                                            data-email="{{$item->email}}"
                                            data-tempatlahir="{{$item->tempatLahir}}"
                                            data-tanggallahir="{{$item->tanggalLahir}}"
                                            data-noIdentitas="{{$item->noIdentitas}}"
                                            data-tipeIdentitas="{{$item->tipeIdentitas}}"
                                            data-kota="{{$item->kota}}"
                                            data-alamat="{{$item->alamat}}"
                                            data-pekerjaan="{{$item->pekerjaan}}"
                                            data-statusPerkawinan="{{$item->statusPerkawinan}}"
                                            data-nomorRumah="{{$item->nomorRumah}}"
                                            data-nomorHp="{{$item->nomorHp}}"
                                            data-namaKontakDarurat="{{$item->namaKontakDarurat}}"
                                            data-nomorDarurat="{{$item->nomorDarurat}}"
                                            data-kewarganegaraan="{{$item->kewarganegaraan}}"
                                            data-tanggalDaftar="{{$item->tanggalDaftar}}"
                                            data-alergi="{{$item->alergi}}"
                                            data-golonganDarah="{{$item->golonganDarah}}"
                                            data-tinggiBadan="{{$item->tinggiBadan}}"
                                            data-beratBadan="{{$item->beratBadan}}"
                                            data-jeniskelamin="{{$item->jenisKelamin}}"
                                        ></i>
                                        <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete?')) { document.getElementById('delete-form-{{$loop->index}}').submit(); }">
                                            <i class="bi bi-trash3-fill text-danger"></i>
                                        </a>

                                        <form id="delete-form-{{$loop->index}}" action="{{ route('destroy_pasien') }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="idUser" value="{{$item->id}}">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection

@section('customJS')

    <!-- Bootstrap core JavaScript-->
    <script src="/templating-assets/vendor/jquery/jquery.min.js"></script>
    <script src="/templating-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/templating-assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/templating-assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/templating-assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/templating-assets/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                var namapasien = $(this).data('namapasien');
                var email = $(this).data('email');
                var tempatlahir = $(this).data('tempatlahir');
                var tanggallahir = $(this).data('tanggallahir');
                var noIdentitas = $(this).data('noIdentitas');
                var tipeIdentitas = $(this).data('tipeIdentitas');
                var kota = $(this).data('kota');
                var alamat = $(this).data('alamat');
                var pekerjaan = $(this).data('pekerjaan');
                var statusPerkawinan = $(this).data('statusPerkawinan');
                var nomorRumah = $(this).data('nomorRumah');
                var nomorHp = $(this).data('nomorHp');
                var namaKontakDarurat = $(this).data('namaKontakDarurat');
                var nomorDarurat = $(this).data('nomorDarurat');
                var kewarganegaraan = $(this).data('kewarganegaraan');
                var tanggalDaftar = $(this).data('tanggalDaftar');
                var alergi = $(this).data('alergi');
                var golonganDarah = $(this).data('golonganDarah');
                var tinggiBadan = $(this).data('tinggiBadan');
                var beratBadan = $(this).data('beratBadan');
                var jenisKelamin = $(this).data('jeniskelamin');

                $('#modalTitle').text('Edit Pasien');
                $('#karyawanForm').attr('action', '{{ route('store_pasien') }}');
                $('#inputIdUser').val(id);
                $('#inputNamaPasien').val(namapasien);
                $('#inputEmail').val(email);
                $('#inputTempatLahir').val(tempatlahir);
                $('#inputTglLahir').val(tanggallahir);
                $('#inputNoIdentitas').val(noIdentitas);
                $('#inputTipeIdentitas').val(tipeIdentitas);
                $('#inputKota').val(kota);
                $('#inputAlamat').val(alamat);
                $('#inputPekerjaan').val(pekerjaan);
                $('#inputStatusKawin').val(statusPerkawinan);
                $('#inputNomorRumah').val(nomorRumah);
                $('#inputTelpHP').val(nomorHp);
                $('#inputNamaKontakDarurat').val(namaKontakDarurat);
                $('#inputTelpDarurat').val(nomorDarurat);
                $('#inputWargaNegara').val(kewarganegaraan);
                $('#tanggalDaftar').val(tanggalDaftar);
                $('#inputAlergi').val(alergi);
                $('#inputGolonganDarah').val(golonganDarah);
                $('#inputTinggiBadan').val(tinggiBadan);
                $('#inputBeratBadan').val(beratBadan);

                if (jenisKelamin === 'laki') {
                    $('#genderMale').prop('checked', true);
                } else if (jenisKelamin === 'perempuan') {
                    $('#genderFemale').prop('checked', true);
                }

                // Hide password field when editing
                $('#inputPassword').prop('disabled', true).attr('placeholder', 'Tidak dapat diedit');
            });

            $('#addPasienBtn').on('click', function() {
                $('#modalTitle').text('Tambah Pasien');
                $('#karyawanForm').attr('action', '{{ route('store_pasien') }}');
                $('#karyawanForm').trigger('reset');
                $('#inputIdUser').val('');

                // Show password field when adding
                $('#inputPassword').prop('disabled', false).attr('placeholder', 'Masukkan Password');
            });
        });
    </script>
@endsection
