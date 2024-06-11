@extends('layouts.app')
@section('title', 'Manage Karyawan')
@section('setAktifListKaryawan', 'active')

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
        <h1 class="biggest-font mt-5 mb-5">Karyawan</h1>

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
                        <h1 class="h1-title-600 w-100 text-center" id="myExtraLargeModalLabel">Tambah Karyawan</h1>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaKaryawan" class="col-sm-4 col-form-label">Nama Karyawan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaKaryawan"
                                            placeholder="Masukan Nama Karyawan">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpRumah" class="col-sm-4 col-form-label">Telp Rumah:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTelpRumah"
                                            placeholder="Masukan Telp Rumah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTempatLahir" class="col-sm-4 col-form-label">Tempat Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTempatLahir"
                                            placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTelpHP" class="col-sm-4 col-form-label">Telp HP:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTelpHP"
                                            placeholder="Masukan Telp HP">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglLahir" class="col-sm-4 col-form-label">Tgl Lahir:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglLahir">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputEmail" class="col-sm-4 col-form-label">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail"
                                            placeholder="Masukan Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoIdentitas" class="col-sm-4 col-form-label">No Identitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoIdentitas"
                                            placeholder="No Identitas">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKategoriStaff" class="col-sm-4 col-form-label">Kategori Staff:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputKategoriStaff">
                                            <option>Dokter 1</option>
                                            <option>Dokter 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-start">
                                    <label for="inputAlamatDomisili" class="col-sm-4 col-form-label">Alamat
                                        Domisili:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" id="inputAlamatDomisili" placeholder="Masukan Alamat Domisili" style="height: 10rem"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKecamatan" class="col-sm-4 col-form-label">Kecamatan:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKecamatan">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKelurahan" class="col-sm-4 col-form-label">Kelurahan:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKelurahan">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center">
                                        <label for="inputKodePos" class="col-sm-4 col-form-label">Kode Pos:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="inputKodePos">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
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
                                <th>ID Karyawan</th>
                                <th>Nama</th>
                                <th>Telepon Rumah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>UAC90</td>
                                <td>Jahja Setiaatmadja</td>
                                <td>08999999999</td>
                                <td>Menara BCA</td>
                                <td>Aktif</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill text-danger"></i></td>
                            </tr>
                            <tr>
                                @foreach ($usersWithKaryawan as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->idKaryawan}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->nomorTelpRumah}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->status}}</td>
                                    {{-- <td>
                                        <i class="bi bi-pencil-square"></i>
                                        <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete?')) { document.getElementById('delete-form-{{$loop->index}}').submit(); }">
                                            <i class="bi bi-trash3-fill text-danger"></i>
                                        </a>
                                        
                                        <form id="delete-form-{{$loop->index}}" action="{{ route('destroy_pasien') }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="idUser" value="{{$item->id}}">
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection

@section('customeJS')

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
