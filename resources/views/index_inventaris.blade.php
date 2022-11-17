<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semua Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <h2 class="text-center mb-3">Edit Data Produk</h2>
    <div class="container mt-5">
       <a href="/inventaris/create" target="blank">Tambah Inventaris</a>
       <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Status</th>
                <th>Tersedia</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventaris as $i)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>{{$i->status}}</td>
                <td>{{$i->tersedia}}</td>
                <td>{{$i->kategori}}</td>
                <td>{{$i->harga}}</td>
                <td>
                    <a href="/inventaris/{{$i->id}}/edit" class="btn btn-warning">
                      <i class="bi bi-pencil"></i>Edit</a>
                    <a href="/inventaris/{{$i->id}}/delete" class="btn btn-warning">
                      <i class="bi bi-trash"></i>Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
  </body>
</html>