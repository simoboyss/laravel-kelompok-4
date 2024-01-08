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
              <form action="/updatedatafasilitator/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputNIDN" class="form-label">NIDN</label>
                  <input type="number" name="nidn" class="form-control" id="exampleInputNIDN" aria-describedby="BantuanNidn" value ="{{$data->nidn}}">
                  <div id="BantuanNidn" class="form-text">Isikan NIDN hanya dengan Angka.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="BantuanNama" value ="{{$data->nama}}">
                  <div id="BantuanNama" class="form-text">Masukkan Nama.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputProdi" class="form-label">Prodi</label>
                  <input type="text" name="prodi" class="form-control" id="exampleInputProdi" aria-describedby="BantuanProdi" value ="{{$data->prodi}}">
                  <div id="BantuanProdi" class="form-text">Masukan Program Studi.</div>
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