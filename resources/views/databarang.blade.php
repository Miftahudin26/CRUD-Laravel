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
        <a href="/tambahdata" type="button" class="btn btn-success mb-2">Tambah Data</a>

        <div class="row">
          @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
          @endif

          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              @php
                $no = 1;
              @endphp

              @foreach ($data as $row)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->Nama }}</td>
                  <td>{{ $row->JenisBarang }}</td>
                  <td>{{ $row->NomorBarang }}</td>
                  <td>{{ $row->created_at->format('D M Y') }}</td>
                  <td>
                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                    <a href="/deletedata/{{ $row->id }}" class="btn btn-danger">Delete</a>

                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>