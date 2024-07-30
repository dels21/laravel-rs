@extends('layouts.app')
@section('title', 'Dashboard Dokter')
@section('setAktifDashboardDokter', 'active')

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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="biggest-font mt-5 mb-5">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row d-flex justify-content-around">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-4">
                <div class="card border-left-primary shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-primary text-uppercase mb-1">
                                    Pemeriksaan Berjalan</div>
                                <div class="h2-title-500 mb-0 font-weight-bold text-gray-800">{{ $pemeriksaanBerjalan }}
                                    Pemeriksaan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-left-success shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Selesai</div>
                                <div class="h2-title-500 mb-0 font-weight-bold text-gray-800">{{ $pemeriksaanSelesai }}
                                    Laporan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-left-danger shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Laporan Pending</div>
                                <div class="h2-title-500 mb-0 font-weight-bold text-gray-800">{{ $pemeriksaanMenunggu }}
                                    Laporan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Nama Radiografer</th>
                                <th>Nomor Pendaftaran</th>
                                <th>Nomor Pemeriksaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemeriksaanTerbaru as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tanggalPemeriksaan }}</td>
                                    <td>{{ $item->namaPasien }}</td>
                                    <td>{{ $item->namaDokter }}</td>
                                    <td>{{ $item->namaKaryawan }}</td>
                                    <td>{{ $item->nomorPendaftaran }}</td>
                                    <td>{{ $item->nomorPemeriksaan }}</td>
                                </tr>
                            @endforeach
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
