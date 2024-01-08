<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tambah Data Peserta</title>
</head>

<body>
  <h1 class="text-center mb-4">Edit Data Peserta Softskill</h1>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="/updatepeserta/{{$data->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{$data->nim}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap"class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp"value="{{$data->nama_lengkap}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
                <select class="form-select" name="prodi" aria-label="Default select example">
                  <option selected>{{$data->prodi}}</option>
                  <option value="TI">TI</option>
                  <option value="Otomotif">Otomotif</option>
                  <option value="Sipil">Sipil</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun</label>
                <select class="form-select" name="levelthn" aria-label="Default select example">
                  <option selected>{{$data->levelthn}}</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Level</label>
                <select class="form-select" name="level" aria-label="Default select example">
                  <option selected>{{$data->level}}</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>