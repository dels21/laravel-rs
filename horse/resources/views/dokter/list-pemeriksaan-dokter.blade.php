@extends('layouts.app')
@section('title', 'ListPasien')
@section('setAktifListPasien', 'active')

@section('content')
    <!-- Custom styles for this template -->
    <link href="/list-pemeriksaan-pasien-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title">List Pasien</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Jam Pemeriksaan</th>
                                <th>ID Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12-09-2025</td>
                                <td>10.00</td>
                                <td>ABC12345</td>
                                <td>Perempuan</td>
                                <td>MRI Scan</td>
                                <td>Selesai</td>
                                <td><i class="bi bi-pencil-square"></i></td>
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
