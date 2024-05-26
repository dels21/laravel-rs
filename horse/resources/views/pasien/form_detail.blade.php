<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pemeriksaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>
  <body>
    <div class="container">
        <div class="mt-5 mb-3 row">
          <div class="col-12">
            <h2>Detail Hasil Pemeriksaan</h2>
          </div>
        </div>
        <div class="mt-5 row">
            <div class="col-12">
                <h3>Data Pasien</h3>
            </div>
        </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Kode Pemeriksaan</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail1" value="kodekodekodekode">
                </div>
              </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>ID Pasien</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail2" value="id pasien id pasien">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Nama Pasien</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail3" value="nama pasien nama pasien">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Jenis Kelamin</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail4" value="id pasien id pasien">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Jenis Pemeriksaan</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail5" value="jenis pemeriksaan">
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Status Pemeriksaan</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail6" value="status pemeriksaan">
                </div>
              </div>
              <div class="mt-5 row">
                <div class="col-12">
                    <h3>Data Pemeriksaan</h3>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Hasil Foto Radiologi</h6></label>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-outline-primary">fotoRadiologi.pdf</button>
                </div>
              </div>
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"><h6>Hasil Pemeriksaan</h6></label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="detail7" value="hasil pemeriksaan">
                </div>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 start-50 translate-middle-x">
                    <div class="mb-3 row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-print"></i>  Cetak
                              </button>                              
                        </div>
                    </div>
                </div>
                </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>