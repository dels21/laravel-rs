@extends('layouts.app')
@section('title', 'Manage Pemeriksaan')
@section('setAktifListJenisPemeriksaan', 'active')

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
        <h1 class="biggest-font mt-5 mb-5">Jenis Pemeriksaan</h1>
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
                        <h1 class="h1-title-600 w-100 text-center" id="myExtraLargeModalLabel">Tambah Jenis Pemeriksaan</h1>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('store_jenis_pemeriksaan') }}" id="jenisPemeriksaanForm">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAlamatIp" class="col-sm-4 col-form-label">Kode Modalitas:</label>
                                    <div class="col-sm-8">
                                        {{-- <select class="form-control" id="inputAlamatIp" name="kodeModalitas">
                                            @foreach ($joinKodeModalitas as $list)
                                            <option value={{ $list->kodeModalitas }}>{{ $list->namaModalitas }}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaJenisPemeriksaan" class="col-sm-4 col-form-label">Nama Jenis
                                        Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaJenisPemeriksaan"
                                            placeholder="Masukan Nama Jenis Pemeriksaan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKelompokJenisPemeriksaan" class="col-sm-4 col-form-label">Kelompok
                                        Jenis Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputKelompokJenisPemeriksaan">
                                            <option value="CT">CT</option>
                                            <option value="MR">MR</option>
                                            <option value="XP-R">XP-R</option>
                                            <option value="XP-WH">XP-WH</option>
                                            <option value="USG">USG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPemakaianKontras" class="col-sm-4 col-form-label">Pemakaian
                                        Kontras:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputPemakaianKontras">
                                            <option>Ya</option>
                                            <option>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputHarga" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputHarga"
                                            placeholder="Masukan Harga">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputLamaPemeriksaan" class="col-sm-4 col-form-label">Lama
                                        Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputLamaPemeriksaan"
                                            placeholder="Masukan Durasi">
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

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Kode Modalitas</th>
                                <th>Nama Jenis Pemeriksaan</th>
                                <th>Kelompok Jenis Pemeriksaan</th>
                                <th>Pemakaian Kontras</th>
                                <th>Harga</th>
                                <th>Lama Pemeriksaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($showJenisPemeriksaan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kodeModalitas }}</td>
                                <td>{{ $item->namaJenisPemeriksaan }}</td>
                                <td>{{ $item->kelompokJenisPemeriksaan }}</td>
                                <td>{{ $item->pemakaianKontras }}</td>
                                <td>{{ $item->lamaPemeriksaan }}</td>
                                <td>{{ $item->kodeRuang }}</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill text-danger"></i></td>
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
