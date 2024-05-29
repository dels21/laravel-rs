@section('title', 'Manage Pemeriksaan')
@section('setAktifListJenisPemeriksaan', 'active')

@section('ListJenisPemeriksaan')
    <!-- Custom styles for this template -->
    <link href="/list-pemeriksaan-pasien-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/list-pemeriksaan-pasien-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="title">Jenis Pemeriksaan</h1>
        <!-- DataTales Example -->
        <div class="container" style="margin-left:7.8rem; margin-top: 1.5rem; margin-bottom: 2.5rem">
            <div class="row">
                <div class="col d-flex justify-content-start">
                    <button type="button" class="btn btn-primary mx-2 d-flex align-items-center justify-content-center"
                        style="width: 120px;" data-toggle="modal" data-target="#myModal">
                        <i class="bi bi-plus-lg me-2"></i> Tambah
                    </button>
                    <button type="button" class="btn btn-danger mx-2 d-flex align-items-center justify-content-center"
                        style="width: 120px;">
                        <i class="bi bi-trash3-fill me-2"></i> Hapus
                    </button>
                </div>
            </div>
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
                        <h1 class="modal-title w-100 text-center" id="myExtraLargeModalLabel">Tambah Jenis Pemeriksaan</h1>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h1>Tambah Jenis Pemeriksaan</h1>

                            <form action="{{ route('jenis-pemeriksaan.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="kode_modalitas" class="form-label">Kode Modalitas:</label>
                                    <input type="text" class="form-control" id="kode_modalitas" name="kode_modalitas" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>

                                <div class="mb-3">
                                    <label for="kelompok" class="form-label">Kelompok:</label>
                                    <select class="form-select" id="kelompok" name="kelompok" required>
                                        <option value="">Pilih Kelompok</option>
                                        <option value="1">Kelompok 1</option>
                                        <option value="2">Kelompok 2</option>
                                        <option value="3">Kelompok 3</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="durasi_pemeriksaan" class="form-label">Durasi Pemeriksaan:</label>
                                    <input type="number" class="form-control" id="durasi_pemeriksaan" name="durasi_pemeriksaan" required>
                                </div>

                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga:</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>

                                <div class="mb-3">
                                    <label for="masa_berlaku" class="form-label">Masa Berlaku:</label>
                                    <input type="number" class="form-control" id="masa_berlaku" name="masa_berlaku" required>
                                </div>

                                <div class="mb-3">
                                    <label for="pemakaian_kontras" class="form-label">Pemakaian Kontras:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="pemakaian_kontras_ya" name="pemakaian_kontras" value="1" required>
                                        <label class="form-check-label" for="pemakaian_kontras_ya">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="pemakaian_kontras_tidak" name="pemakaian_kontras" value="0" required>
                                        <label class="form-check-label" for="pemakaian_kontras_tidak">Tidak</label>
                                    </div>
                                </div>
                                
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
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
                                <th>Kode</th>
                                <th>Kode Modalitas</th>
                                <th>Nama</th>
                                <th>Kelompok</th>
                                <th>Pemakaian</th>
                                <th>Harga</th>
                                <th>Durasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>A221</td>
                                <td>A331</td>
                                <td>CT Scan X</td>
                                <td>CT Scan</td>
                                <td>Tidak</td>
                                <td>Rp 35.000.000</td>
                                <td> 145 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>A214</td>
                                <td>A314</td>
                                <td>X Ray Kepala</td>
                                <td>X Ray</td>
                                <td>Ya</td>
                                <td>Rp 20.000.000</td>
                                <td> 120 Menit</td>
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
