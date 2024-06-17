@extends('layouts.app')
@section('title', 'Pemeriksaan Saya')
@section('setAktifPemeriksaanSaya', 'active')

@section('customCSS')

    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    {{-- <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="h1-title-600 w-100 text-center" id="myExtraLargeModalLabel">Detail Pemeriksaan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Pendaftaran</th>
                                            <th>ID Pasien</th>
                                            <th>Tanggal Pemeriksaan</th>
                                            <th>Jam Mulai Pemeriksaan</th>
                                            <th>Jam Selesai Pemeriksaan</th>
                                            <th>Jenis Pemeriksaan</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mergedDetails as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->noPendaftaran}}</td>
                                            <td>{{$item->idPasien}}</td>
                                            <td>{{$item->tanggalDaftar}}</td>
                                            <td>{{$item->jamMulai}}</td>
                                            <td>{{$item->jamSelesai}}</td>
                                            <td>{{$item->namaJenisPemeriksaan}}</td>
                                            <td>{{$item->keteranganKetersediaan}}</td>
                                            <td><i class="bi bi-cloud-arrow-down-fill"></i></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="biggest-font mt-5 mb-5">Pemeriksaan Saya</h1>
        <!-- DataTales Example -->
        <div class="card-body">
            @if($transactions->isEmpty())
            <p>Belum ada pemeriksaan.</p>
            
            {{-- <p>User ID: {{ $user->id }}</p> --}}
            @else
            <div class="table-responsive">
                    <div class="card shadow mb-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Pendaftaran</th>
                                <th>No. Pemeriksaan</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Diagnosis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <td>{{ $transaction->id }}</td> <!-- Assuming TransaksiPemeriksaan has an 'id' attribute -->
                    <td>{{ $transaction->pendaftaranPemeriksaan->user->name }}</td> <!-- Accessing user name -->
                    <td>{{ $transaction->pendaftaranPemeriksaan->id }}</td> <!-- Assuming PendaftaranPemeriksaan has an 'id' attribute --> --}}
                            @foreach ($transactions as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nomorPendaftaran}}</td>
                                <td>{{$item->nomorPemeriksaan}}</td>
                                <td>{{$item->tanggalPemeriksaan}}</td>
                                <td>{{$item->diagnosis}}</td>
                                <td class="detail-link" data-toggle="modal" data-target="#myModal">Detail</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
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