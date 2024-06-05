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
            <h1 class="title">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-5 mb-4">
                <div class="card border-left-primary shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Pasien</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">9.412 Pasien</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-left-success shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Laporan Selesai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">250 Laporan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-left-danger shadow mb-5 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Laporan Pending</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">500 Laporan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-7 mb-4">
                <!-- Area Chart -->
                <div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Jumlah Laporan</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
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
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2025</td>
                                    <td>10.00</td>
                                    <td>ABC12345</td>
                                    <td>Perempuan</td>
                                    <td>MRI Scan</td>
                                    <td>Selesai</td>
                                    <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
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
