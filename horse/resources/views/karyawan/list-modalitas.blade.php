@extends('layouts.app')
@section('title', 'Manage Modalitas')
@section('setAktifListModalitas', 'active')

@section('content')
    <!-- Custom styles for this template -->
    <link href="/list-pemeriksaan-pasien-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title">Modalitas</h1>
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
                        <h1 class="modal-title w-100 text-center" id="myExtraLargeModalLabel">Tambah Modalitas</h1>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKodeModalitas" class="col-sm-4 col-form-label">Kode
                                        Modalitas:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputKodeModalitas">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglAkuisisi" class="col-sm-4 col-form-label">Tgl Akuisisi:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglAkuisisi">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaModalitas" class="col-sm-4 col-form-label">Nama
                                        Modalitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaModalitas"
                                            placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglKalibrasi" class="col-sm-4 col-form-label">Tgl
                                        Kalibrasi:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglKalibrasi">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputMerkModalitas" class="col-sm-4 col-form-label">Merk
                                        Modalitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputMerkModalitas"
                                            placeholder="Enter brand">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTglKalibrasiBerikutnya" class="col-sm-4 col-form-label">Tgl
                                        Kalibrasi Berikutnya:</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="inputTglKalibrasiBerikutnya">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputTipeModalitas" class="col-sm-4 col-form-label">Tipe
                                        Modalitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTipeModalitas"
                                            placeholder="Enter type">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoDokumenKalibrasi" class="col-sm-4 col-form-label">No Dokumen
                                        Kalibrasi:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoDokumenKalibrasi"
                                            placeholder="Enter document number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputSerialNumber" class="col-sm-4 col-form-label">Serial
                                        Number:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputSerialNumber"
                                            placeholder="Enter serial number">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNoSuratIjin" class="col-sm-4 col-form-label">No Surat
                                        Ijin:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNoSuratIjin"
                                            placeholder="Enter permit number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputMasaBerlaku" class="col-sm-4 col-form-label">Masa
                                        Berlaku:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputMasaBerlaku"
                                            placeholder="Enter validity period">
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
                                <th>Nama Modalitas</th>
                                <th>Merk Modalitas</th>
                                <th>Tanggal Kalibrasi</th>
                                <th>Tanggal Kalibrasi Selanjutnya</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MRI Scan</td>
                                <td>Samsung</td>
                                <td>22-04-2023</td>
                                <td>12-09-2025</td>
                                <td>Tersedia</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Bootstrap core JavaScript-->
    <script src="/list-pemeriksaan-pasien-assets/vendor/jquery/jquery.min.js"></script>
    <script src="/list-pemeriksaan-pasien-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/list-pemeriksaan-pasien-assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/list-pemeriksaan-pasien-assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/list-pemeriksaan-pasien-assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/list-pemeriksaan-pasien-assets/js/demo/datatables-demo.js"></script>
@endsection
