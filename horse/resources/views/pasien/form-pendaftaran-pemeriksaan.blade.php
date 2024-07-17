@extends('layouts.app')
@section('title', 'Daftar Pemeriksaan')
@section('setAktifDaftarPemeriksaan', 'active')

@section('content')
    <div class="container" style="width: 80%">
        <h1 class="title">Surat Daftar Pemeriksaan</h1>

        <form action="{{ route('pasien.store-pemeriksaan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggalDaftar" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggalDaftar" name="tanggalDaftar">
                    </div>
                    <div class="mb-3">
                        <label for="attachment" class="form-label">Attachment</label>
                        <input type="file" class="form-control" id="attachment" name="attachment">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namaDokterPengirim" class="form-label">Nama Dokter Pengirim</label>
                        <input type="text" class="form-control" id="namaDokterPengirim" name="namaDokterPengirim">
                    </div>
                </div>
            </div>

            <hr>

            <div class="container mt-5">
                <div id="form-container">
                    <div class="row mb-3 align-items-center form-row">
                        <div class="col-1">
                            <button type="button" class="btn btn-outline-secondary btn-sm remove-btn-form"
                                disabled>&times;</button>
                        </div>
                        <div class="col-7">
                            <label for="modalitas1" class="form-label">Modalitas</label>
                            <select class="form-control" id="inputAlamatIp" name="alamatIp">
                                @foreach ($joinModalitas as $list)
                                <option value={{ $list->kodeModalitas }}>{{ $list->namaModalitas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="harga1" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga1" name="harga[]" min="0"
                                placeholder="Masukkan harga modalitas" disabled>
                        </div>
                    </div>
                </div>
                <button id="add-more-btn" type="button" class="btn btn-primary">Tambah Pemeriksaan</button>
            </div>

            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('add-more-btn').addEventListener('click', function() {
            // Get the container where the form rows are added
            var container = document.getElementById('form-container');

            // Clone the first row (both columns)
            var firstRow = container.querySelector('.form-row');
            var newRow = firstRow.cloneNode(true);

            // Update the id for the new dropdown and text field
            var rowCount = container.children.length + 1;
            var newModalitasId = 'modalitas' + rowCount;
            var newHargaId = 'harga' + rowCount;

            newRow.querySelector('label[for^="modalitas"]').setAttribute('for', newModalitasId);
            newRow.querySelector('select[id^="modalitas"]').setAttribute('id', newModalitasId);

            newRow.querySelector('label[for^="harga"]').setAttribute('for', newHargaId);
            newRow.querySelector('input[id^="harga"]').setAttribute('id', newHargaId);

            // Clear the values of the cloned inputs
            newRow.querySelector('select[id^="modalitas"]').value = "";
            newRow.querySelector('input[id^="harga"]').value = "";

            // Enable and add event listener for the remove button
            var removeBtn = newRow.querySelector('.remove-btn-form');
            removeBtn.disabled = false;
            removeBtn.classList.remove('btn-outline-secondary');
            removeBtn.classList.add('btn-outline-danger');
            removeBtn.addEventListener('click', function() {
                newRow.remove();
                updateRemoveButtonsState();
            });

            // Append the new row to the container
            container.appendChild(newRow);

            // Ensure the remove button on the first row is enabled
            updateRemoveButtonsState();
        });

        // Function to update the state of remove buttons
        function updateRemoveButtonsState() {
            var container = document.getElementById('form-container');
            var removeButtons = container.querySelectorAll('.remove-btn-form');

            if (removeButtons.length === 1) {
                removeButtons[0].disabled = true;
                removeButtons[0].classList.remove('btn-outline-danger');
                removeButtons[0].classList.add('btn-outline-secondary');
            } else {
                removeButtons.forEach(function(button) {
                    button.disabled = false;
                    button.classList.remove('btn-outline-secondary');
                    button.classList.add('btn-outline-danger');
                });
            }
        }

        // Initial event listener for the first remove button
        document.querySelector('.remove-btn-form').addEventListener('click', function() {
            if (document.getElementById('form-container').children.length > 1) {
                this.closest('.form-row').remove();
                updateRemoveButtonsState();
            }
        });

        // Initial call to ensure correct state on page load
        updateRemoveButtonsState();
    </script>
@endsection
