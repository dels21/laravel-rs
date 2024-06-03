@extends('layouts.app')
@section('title', 'Manage DICOM')
@section('setAktifListDICOM', 'active')

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
        <h1 class="title">DICOM</h1>
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
                        <h1 class="modal-title w-100 text-center" id="myExtraLargeModalLabel">Tambah DICOM</h1>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAlamatIP" class="col-sm-4 col-form-label">Alamat IP:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputAlamatIP"
                                            placeholder="Masukan Alamat IP">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputNetmask" class="col-sm-4 col-form-label">Netmask:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputNetmask"
                                            placeholder="Masukan Netmask">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputLayananDICOM" class="col-sm-4 col-form-label">Layanan DICOM:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputLayananDICOM">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPeran" class="col-sm-4 col-form-label">Peran:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="inputPeran">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputAET" class="col-sm-4 col-form-label">AET</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputAET" placeholder="Masukan AET">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 d-flex align-items-center">
                                    <label for="inputPort" class="col-sm-4 col-form-label">Port:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPort"
                                            placeholder="Masukan Port">
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
                                <th>Alamat IP</th>
                                <th>Netmask</th>
                                <th>Layanan DICOM</th>
                                <th>Peran</th>
                                <th>AET</th>
                                <th>Port</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UTP99</td>
                                <td>192.168.10.1</td>
                                <td>255.255.255.0</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXXXXXXXXX</td>
                                <td>XXX</td>
                                <td><i class="bi bi-pencil-square"></i><i class="bi bi-trash3-fill"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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
