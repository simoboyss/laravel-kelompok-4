<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Fasilitator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Fasilitator</h1>

    <div class="container">
        <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
            <div class="card-body">
            <form action="/nilai/store" method="POST">
             @csrf
                <div class="mb-3">
                  <label for="exampleInputNIM" class="form-label">NIM</label>
                  <input type="number" name="nim" class="form-control" id="exampleInputNIM" aria-describedby="BantuanNim">
                  <div id="BantuanNidn" class="form-text">Isikan NIDN hanya dengan Angka.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNama" class="form-label">Nama Lengkap Peserta</label>
                  <input type="text" name="nama_peserta" class="form-control" id="exampleInputNama" aria-describedby="BantuanNama" >
                  <div id="BantuanNama" class="form-text">Masukkan Nama Peserta.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNamaFasilitator" class="form-label">Nama Fasilitator</label>
                  <input type="text" name="nama_fasilitator" class="form-control" id="exampleInputNamaFasilitator" aria-describedby="NamaFasilitator" >
                  <div id="BantuanProdi" class="form-text">Masukan Nama Fasilitator.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNilaiAkhir" class="form-label">Nilai Akhir</label>
                  <input type="text" name="nilai_akhir" class="form-control" id="exampleInputNilaiAkhir" aria-describedby="Nilai Akhir" >
                  <div id="BantuanProdi" class="form-text">Masukan Nilai Akhir.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPresensi" class="form-label">Presensi</label>
                  <input type="text" name="presensi" class="form-control" id="exampleInputPresensi" aria-describedby="Input Presensi" >
                  <div id="BantuanProdi" class="form-text">Masukan Presensi.</div>
                </div>                
                <div class="mb-3">
                  <label for="exampleInputTotalNilai" class="form-label">Total Nilai</label>
                  <input type="text" name="total_nilai" class="form-control" id="exampleInputTotalNilai" aria-describedby="Total Nilai" >
                  <div id="BantuanProdi" class="form-text">Masukan Total Nilai.</div>
                </div>                
                <div class="mb-3">
                  <label for="exampleInputKonversi" class="form-label">Konversi Nilai</label>
                  <input type="text" name="konversi_nilai" class="form-control" id="exampleInputKonversi" aria-describedby="Konversi Nilai">
                  <div id="BantuanProdi" class="form-text">Masukan Konversi Nilai.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputKonversi" class="form-label">Level</label>
                  <input type="text" name="level" class="form-control" id="exampleInputKonversi" aria-describedby="Konversi Nilai">
                  <div id="BantuanProdi" class="form-text">Masukan Level</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputKonversi" class="form-label">Tahun</label>
                  <input type="text" name="tahun" class="form-control" id="exampleInputKonversi" aria-describedby="Konversi Nilai">
                  <div id="BantuanProdi" class="form-text">Masukan Tahun.</div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!-- <h1>Memasukkan Nilai</h1>

<form action="/nilai/store" method="POST">
    @csrf
    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="nama_peserta" placeholder="NAMA PESERTA"><br>
    <input type="text" name="nama_fasilitator" placeholder="NAMA FASILITATOR"><br>
    <input type="text" name="nilai_akhir" placeholder="NILAI AKHIR"><br>
    <input type="text" name="presensi" placeholder="PRESENSI"><br>
    <input type="text" name="total_nilai" placeholder="TOTAL NILAI"><br>
    <input type="text" name="konversi_nilai" placeholder="KONVERSI NILAI"><br>
    <input type="submit" name="submit" value="Simpan">
</form> -->