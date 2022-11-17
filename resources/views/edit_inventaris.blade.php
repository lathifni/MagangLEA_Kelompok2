<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <form action="/inventaris/{{$inventaris->id}}" method="post">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Inventaris</label>
                <input type="text" class="form-control" id="nama" value="{{$inventaris->nama}}" name="nama">
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Kategori Inventaris</label>
                <input type="text" class="form-control" value="{{$inventaris->kategori}}" readonly>
                <select name="kategori" id="kategori">
                  <option value="habis pakai">Habis pakai</option>
                  <option value="tidak habis pakai">Tidak habis pakai</option> 
                </select>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Inventaris</label>
                <input type="text" class="form-control" value="{{$inventaris->status}}" readonly>
                <select name="status" id="status">
                  <option value="sewa">Hanya dapat disewakan</option>
                  <option value="pinjam">Dapat dipinjamkan</option> 
                </select>
            </div>
            <div class="mb-3">
              <label for="kesediaan" class="form-label">Kesediaan Inventaris</label>
              <input type="text" class="form-control" value="{{$inventaris->tersedia}}" readonly>
              <select name="tersedia" id="tersedia">
                <option value="ya">ya</option>
                <option value="tidak">tidak</option> 
              </select>
            </div>
            <div class="mb-3">
              <label for="Nama" class="form-label">Harga Sewa Inventaris</label>
              <input type="int" class="form-control" id="harga" value="{{$inventaris->harga}}" name="harga">
            </div>
            <div class="mb3">
                <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>