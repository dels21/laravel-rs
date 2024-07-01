@extends('layouts.app')
@section('title', 'Manage Pemeriksaan')
@section('setAktifListPemeriksaan', 'active')

@section('customCSS')

    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    <!-- Modal -->
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
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Pemeriksaan</th>
                                            <th>Tanggal Pemeriksaan</th>
                                            <th>Jam Mulai Pemeriksaan</th>
                                            <th>Jam Selesai Pemeriksaan</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($data as $item) --}}
                                        <tr>
                                            {{-- <td>{{$loop->iteration}}</td>
                                            <td>{{$item->noPemeriksaan}}</td>
                                            <td>{{$item->tanggal}}</td>
                                            <td>{{$item->jamMulai}}</td>
                                            <td>{{$item->jamSelesai}}</td>
                                            <td>{{$item->ruangan}}</td>
                                            <td>{{$item->status}}</td> --}}
                                            <p class="detail-noPemeriksaan"></p>
                                            <p class="detail-jamMulai"></p>
                                            {{-- <td><a class="detail-link" data-toggle="modal" data-target="#myModal">Detail</a></td>   --}}
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Page Content -->

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="biggest-font mt-5 mb-5">Pemeriksaan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Pendaftaran</th>
                                <th>No. Pemeriksaan</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>ID Pasien</th>
                                <th>ID Karyawan Radiographer</th>
                                <th>ID Karyawan Radiologi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->noPendaftaran}}</td>
                                <td>{{$item->noPemeriksaan}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->idPasien}}</td>
                                <td>{{$item->idRadio}}</td>
                                <td>{{$item->idDokter}}</td>
                                <td><a class="detail-link" data-toggle="modal" data-target="#myModal" onclick="showDetail({{ $item->NoPemeriksaan}})">Detail</a></td>
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
    <script>
        function showDetail(id){
            $.ajax({
                url: '/list-pemeriksaan/' + id,
                type: 'GET',
                success: function(data){
                    $('#detail-noPemeriksaan').text('No Pemeriksaan: ' + data.noPemeriksaan);
                    $('#detail-jamMulai').text('Jam Mulai: ' + data.jamMulai);

                }
            });
        }
        
    </script>
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
  

@endsection
