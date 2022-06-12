<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Data Mahasiswa</title>
  </head>
  <body>
    <h1 class="text-center">Modul VI PHP & MySQL</h1>
    <p class="text-center">Nama/NRP : Firdatul Fitriyah/200411100020</p>
    <hr />
    <h2 class="text-center mb-4">Master Data Mahasiswa</h2>

    <div class="container">
    <a href="/tambahsiswa" type="button" class="btn btn-success">Tambah +</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $dt)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $dt->nrp }}</td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->email }}</td>
                    <td>{{ $dt->alamat }}</td>
                    <td>
                        <a href="/tampilkandata/{{ $dt->id }}" class="btn btn-danger">Update</a>
                        <a href="/delete/{{ $dt->id }}" class="btn btn-warning">Hapus</a>
                       
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>