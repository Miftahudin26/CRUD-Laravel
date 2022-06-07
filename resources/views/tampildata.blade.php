<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center m-4">Data Barang</h1>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">

                <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">

                  <!-- csrf hal penting untk tampil token saat setelah isi form -->
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="Nama" id="exampleInputEmail1" 
                      aria-describedby="emailHelp" value="{{ $data->Nama }}">
                  </div>
                
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                    <select class="form-select" name="JenisBarang" aria-label="Default select example">
                      <option selected>{{ $data->JenisBarang }}</option>
                      <option value="besar">Besar</option>
                      <option value="kecil">Kecil</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Barang</label>
                    <input type="number" class="form-control" name="NomorBarang" id="exampleInputEmail1" 
                      aria-describedby="emailHelp" value="{{ $data->NomorBarang }}">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>