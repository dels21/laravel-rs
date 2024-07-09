@extends('layouts.app')
@section('title', 'Detail Verifikasi Pendaftaran')
@section('setAktifVerifikasi', 'active')

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
        <h1 class="biggest-font mt-5 mb-5">Detail Verifikasi Pendaftaran</h1>

        <!-- DataTales Example -->
        <form action="{{ route('accept_verif') }}" method="POST" id="form">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Jam Pemeriksaan</th>
                                    <th>ID Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jenis Pemeriksaan</th>
                                    <th>Ruangan</th>
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
                                    <td><input type="text" name="inputRuangan[0]" placeholder="Masukkan ruangan" style="width: 10vw"></td>
                                    <td class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="decision[0]" id="accept0" value="accept">
                                            <label class="form-check-label" for="accept0">Terima</label>
                                        </div>
                                        <div style="width: 10px;"></div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="decision[0]" id="reject0" value="reject">
                                            <label class="form-check-label" for="reject0">Tolak</label>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Example Row 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>13-09-2025</td>
                                    <td>11.00</td>
                                    <td>DEF67890</td>
                                    <td>Laki-laki</td>
                                    <td>CT Scan</td>
                                    <td><input type="text" name="inputRuangan[1]" placeholder="Masukkan ruangan" style="width: 10vw"></td>
                                    <td class="d-flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="decision[1]" id="accept1" value="accept">
                                            <label class="form-check-label" for="accept1">Terima</label>
                                        </div>
                                        <div style="width: 10px;"></div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="decision[1]" id="reject1" value="reject">
                                            <label class="form-check-label" for="reject1">Tolak</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Dokter dan karyawan radiologi --}}
            <div class="row">
                <div class="col-md-6 mt-4">
                    <x-input-label for="dokter" :value="__('Dokter')" />
                    <select id="dokter" class="block mt-1 w-full form-control shadow-sm" name="dokter"
                        :value="old('dokter')">
                        <option style="color: rgba(0, 0, 0, 0.421)">Pilih dokter</option>
                        <option>KTP</option>
                        <option>Paspor</option>
                        <option>SIM</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="submitForm('accept')">Terima Pendaftaran</button>
                <button type="submit" class="btn btn-danger" onclick="submitForm('reject')">Tolak Pendaftaran</button>
            </div>
        </form>
    </div>

    <script>
        function submitForm(action) {
            var form = document.getElementById('form');
            var actionType = document.getElementById('actionType');

            if (action === 'accept') {
                form.action = "{{ route('accept_verif') }}";
            } else if (action === 'reject') {
                form.action = "{{ route('reject_verif') }}";
            }
        }
    </script>
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
