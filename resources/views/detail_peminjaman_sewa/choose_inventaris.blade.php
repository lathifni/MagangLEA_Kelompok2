<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Pemilihan Inventaris yang Dipinjam</h5>
            <form action="/detail_peminjaman_sewa/create?id={{$id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label">Pilih Inventaris Ingin Dipinjam</label>
            
                    <div class="col-md-6">
                        <select name="id_inventaris" id="id_inventaris" class="form-control">
                            <option value="">== Pilih Inventaris  ==</option>
                            @foreach ($inventaris as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                   <div class="mb3">
                       <br><a href="/index/peminjaman_sewa?id={{$id}}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Kirim</button>
                   </div>
            </form>
        </div>
    </div>
</body>
</html>