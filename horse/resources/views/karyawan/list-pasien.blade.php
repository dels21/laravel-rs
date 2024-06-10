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
                style="width: 7.5rem;" data-toggle="modal" data-target="#myModal">
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
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaPasien" class="col-sm-4 col-form-label">Nama Pasien:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaPasien" placeholder="Masukan Nama Pasien">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpRumah" class="col-sm-4 col-form-label">Telp Rumah:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpRumah" placeholder="Masukan Telp Rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTempatLahir" placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglLahir" class="col-sm-4 col-form-label">Tgl Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglLahir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoIdentitas" class="col-sm-4 col-form-label">No Identitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoIdentitas" placeholder="No Identitas">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTipeIdentitas" class="col-sm-4 col-form-label">Tipe Identitas:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputTipeIdentitas">
                                            <option value="KTP">KTP</option>
                                            <option value="Paspor">Paspor</option>
                                            <option value="SIM">SIM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label class="col-sm-4 col-form-label">Jenis Kelamin:</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="laki">
                                            <label class="form-check-label" for="genderMale">Pria</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="perempuan">
                                            <label class="form-check-label" for="genderFemale">Wanita</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKota" class="col-sm-4 col-form-label">Kota:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputKota" placeholder="Masukan Kota">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPekerjaan" class="col-sm-4 col-form-label">Pekerjaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPekerjaan" placeholder="Masukan Pekerjaan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputStatusKawin" class="col-sm-4 col-form-label">Status Kawin:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputStatusKawin">
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
                                        <input type="text" class="form-control" id="inputNomorRumah" placeholder="Masukan Nomor Rumah">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpHP" class="col-sm-4 col-form-label">Telp HP:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpHP" placeholder="Masukan Telp HP">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaKontakDarurat" class="col-sm-4 col-form-label">Nama Kontak Darurat:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaKontakDarurat"
                                            placeholder="Masukan Nama Kontak Darurat">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpDarurat" class="col-sm-4 col-form-label">Telp Darurat:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpDarurat"
                                            placeholder="Masukan Telp Darurat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputWargaNegara" class="col-sm-4 col-form-label">Warga Negara:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputWargaNegara"
                                            placeholder="Masukan Warga Negara">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTanggalDaftar" class="col-sm-4 col-form-label">Tanggal Daftar:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTanggalDaftar">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAlergi" class="col-sm-4 col-form-label">Alergi:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputAlergi" placeholder="Masukan Alergi" style="height: 10rem"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputGolonganDarah" class="col-sm-4 col-form-label">Golongan Darah:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputGolonganDarah">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>AB</option>
                                            <option>O</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTinggiBadan" class="col-sm-4 col-form-label">Tinggi Badan:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputTinggiBadan" placeholder="Masukan Tinggi Badan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputBeratBadan"
                                    class="col-sm-4 col-form-label">Berat Badan:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputBeratBadan" placeholder="Masukan Berat Badan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputName" class="col-sm-4 col-form-label">Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputName" placeholder="Masukan Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputEmail" class="col-sm-4 col-form-label">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Email">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Password:</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Password">
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
                            {{-- <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>Menara BCA</td>
                                <td>24/04/2024</td>
                                <td>Aktif</td>
                                <td>xxx</td>
                                <td>
                                    <i class="bi bi-pencil-square"></i>
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </td>
                            </tr> --}}
                            {{-- @forelse ($pasien as $item)
                                <td>{{$loop->iteration }}</td>
                                <td>{{$item->id }}</td>
                                <td>{{$item-> }}</td>
                                <td>{{$item-> }}</td>
                                <td>{{$item-> }}</td>
                                <td>{{$item-> }}</td>
                                <td>{{$loop->iteration }}</td>
                            @endforelse --}}
                            {{-- @dd($pasien) --}}
                            @foreach ($user as $userUnit)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                @foreach ($pasien as $pasienUnit)
                                    @if ($userUnit->id == $pasienUnit->idUser)
                                        <td>{{$pasienUnit->idPasien}}</td>
                                        <td>{{$userUnit->name}}</td>
                                        <td>{{$pasienUnit->alamat}}</td>
                                        <td>{{$pasienUnit->tanggalDaftar}}</td>
                                        <td>{{$userUnit->status}}</td>
                                        <td>
                                            <i class="bi bi-pencil-square"></i>
                                            <i class="bi bi-trash3-fill text-danger"></i>
                                        </td>
                                    @endif
                                @endforeach
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

@endsection
