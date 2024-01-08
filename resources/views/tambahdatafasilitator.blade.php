<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Fasilitator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
    <h1 class="text-center mb-4">Tambah Data Fasilitator</h1>
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertdatafasilitator" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputNIDN" class="form-label">NIDN</label>
                  <input type="number" name="nidn" class="form-control" id="exampleInputNIDN" aria-describedby="BantuanNidn">
                  <div id="BantuanNidn" class="form-text">Isikan NIDN hanya dengan Angka.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="BantuanNama">
                  <div id="BantuanNama" class="form-text">Masukkan Nama.</div>
                </div>
                <div class="mb-3">
                                <label for="Prodi" class="form-label">Prodi:</label>
                                <div class="input-group">
                                    <select name="Prodi" class="custom-select">                                        
                                        <option value="" selected>- Pilih Prodi -</option>
                                        <option value="Teknologi informasi">Teknologi Informasi</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Pendidikan Bahasa dan Sastra Indonesia">Pendidikan Bahasa dan Sastra Indonesia</option>
                                        <option value="Pendidikan Bahasa dan Satra Jawa">Pendidikan Bahasa dan Satra Jawa</option>
                                        <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                        <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                                        <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                        <option value="Pendidikan Teknik Otomotif">Pendidikan Teknik Otomotif</option>
                                        <option value="Pendidikan Guru SD">Pendidikan Guru SD</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Hukum">Hukum</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Agribisnis">Agribisnis</option>
                                        <option value="Peternakan">Peternakan</option>
                                    </select>
                                    <!--<div class="input-group-append">
                                        <div class="input-group-text custom-select-icon" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         </div>
        </div>
    </div>
    
    </html>