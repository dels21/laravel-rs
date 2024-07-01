@extends('layouts.app')
@section('title', 'ListPasien')
@section('setAktifListPasien', 'active')

@section('customCSS')
    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="mb-5 mt-5 row">
            <div class="col">
                <h2 class="biggest-font">Detail Hasil Pemeriksaan</h2>
            </div>
        </div>
        <div class="mb-5 row">
            <div class="col-12">
                <h3 class="h2-title-600">Data Pasien</h3>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kodePemeriksaan" class="col-sm-2 col-form-label">
                <h6>Kode Pemeriksaan</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="kodePemeriksaan" value="kodekodekodekode">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="idPasien" class="col-sm-2 col-form-label">
                <h6>ID Pasien</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="idPasien" value="id pasien id pasien">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="namaPasien" class="col-sm-2 col-form-label">
                <h6>Nama Pasien</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="namaPasien" value="nama pasien nama pasien">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenisKelamin" class="col-sm-2 col-form-label">
                <h6>Jenis Kelamin</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="jenisKelamin" value="Perempuan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenisPemeriksaan" class="col-sm-2 col-form-label">
                <h6>Jenis Pemeriksaan</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="jenisPemeriksaan" value="jenis pemeriksaan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="statusPemeriksaan" class="col-sm-2 col-form-label">
                <h6>Status Pemeriksaan</h6>
            </label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" id="statusPemeriksaan" value="status pemeriksaan">
            </div>
        </div>
        <div class="mb-5 row">
            <div class="col-12">
                <h3 class="h2-title-600">Data Pemeriksaan</h3>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hasilFotoRadiologi" class="col-sm-2 col-form-label">
                <h6>Hasil Foto Radiologi</h6>
            </label>
            <div class="col-sm-10">
                <button type="button" class="btn btn-outline-primary">fotoRadiologi.pdf</button>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hasilPemeriksaan" class="col-sm-2 col-form-label">
                <h6>Hasil Pemeriksaan</h6>
            </label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="hasilPemeriksaan" name="hasilPemeriksaan" style="height: 10rem"></textarea>
            </div>
        </div>
        <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle-x">
                <div class="mb-3 row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-floppy-fill me-2"></i>Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
