@extends('layouts.app')
@section('title', 'Daftar Pemeriksaan')
@section('setAktifDaftarPemeriksaan', 'active')

@section('content')
    <div class="container" style="margin: 0 0 0 9.375rem;">
        <h1 class="title">Surat Daftar Pemeriksaan</h1>

        <form action="{{ route('pasien.store-pemeriksaan') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Attachment</label>
                        <input type="file" class="form-control" id="attachment" name="attachment">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="idDokter" class="form-label">Nama Dokter Pengirim</label>
                        <input type="text" class="form-control" id="idDokter" name="idDokter">
                    </div>
                </div>
            </div>

            <hr>

            <div class="container mt-5">
                <div class="row" id="form-container">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="modalitas1" class="form-label">Modalitas</label>
                            <select class="form-select" id="modalitas1" name="modalitas[]" aria-label="Pilih modalitas">
                                <option value="">Pilih modalitas</option>
                                <option value="MRI">MRI</option>
                                <option value="CT Scan">CT Scan</option>
                                <option value="Ultrasound">Ultrasound</option>
                                <option value="Rontgen">Rontgen</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="harga1" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga1" name="harga[]" min="0"
                                placeholder="Masukkan harga modalitas">
                        </div>
                    </div>
                </div>
                <button id="add-more-btn" type="button" class="btn btn-primary">Tambah Pemeriksaan</button>
            </div>

            <script>
                document.getElementById('add-more-btn').addEventListener('click', function() {
                    // Get the container where the form rows are added
                    var container = document.getElementById('form-container');

                    // Clone the first row (both columns)
                    var firstRow = container.parentElement.children[0];
                    var newRow = firstRow.cloneNode(true);

                    // Update the id for the new dropdown and text field
                    var rowCount = container.parentElement.children.length;
                    var newModalitasId = 'modalitas' + rowCount;
                    var newHargaId = 'harga' + rowCount;

                    newRow.querySelector('label[for="modalitas1"]').setAttribute('for', newModalitasId);
                    newRow.querySelector('select#modalitas1').setAttribute('id', newModalitasId);

                    newRow.querySelector('label[for="harga1"]').setAttribute('for', newHargaId);
                    newRow.querySelector('input#harga1').setAttribute('id', newHargaId);

                    // Append the new row to the container
                    container.parentNode.insertBefore(newRow, container.nextSibling);
                });
            </script>

    </div>
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    </form>
    </div>
@endsection
