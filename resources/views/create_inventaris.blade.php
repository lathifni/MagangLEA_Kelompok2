<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <form action="/produk" method="post">
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama produk" name="nama">
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga">
            </div>
            <div class="mb-3">
                <label for="Jumlah" class="form-label">Jumlah Produk</label>
                <input type="number" class="form-control" id="jumlah" placeholder="Masukkan jumlah produk" name="jumlah">
            </div>
            <div class="mb3">
                <button type="submit" class="btn btn-success">Kirim</button>
                
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>