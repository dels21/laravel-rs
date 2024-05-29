@section('title', 'Manage Jenis Pemeriksaan')
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
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKodeModalitas" class="col-sm-4 col-form-label">Kode Modalitas:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputKodeModalitas" placeholder="Masukan Kode Modalitas">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNamaJenisPemeriksaan" class="col-sm-4 col-form-label">Nama Jenis Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNamaJenisPemeriksaan" placeholder="Masukan Nama Jenis Pemeriksaan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputKelompokJenisPemeriksaan" class="col-sm-4 col-form-label">Kelompok Jenis Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputKelompokJenisPemeriksaan">
                                            <option>Kelompok 1</option>
                                            <option>Kelompok 2</option>
                                            <option>Kelompok3</option>
                                            <option>Kelompok 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPemakaianKontras" class="col-sm-4 col-form-label">Pemakaian Kontras:</label>
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
                                        <input type="text" class="form-control" id="inputHarga" placeholder="Masukan Harga">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputLamaPemeriksaan" class="col-sm-4 col-form-label">Lama Pemeriksaan:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputLamaPemeriksaan" placeholder="Masukan Port">
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
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MJP99</td>
                                <td>UTP99</td>
                                <td>CT-X</td>
                                <td>CT</td>
                                <td>Ya</td>
                                <td>100000</td>
                                <td>90</td>
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
