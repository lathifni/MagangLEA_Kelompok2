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
        <h5 class="card-title">Form Tambah Data Pengajuan Peminjaman</h5>
        <div class="row">
            <div class="col-lg-8 col-md- label ">Nama Anggota</div>
            <div class="col-lg-4 col-md-8">Budi</div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-4 label ">Tanggal Transaksi</div>
            <div class="col-lg-4 col-md-8">Budi</div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-4 label ">Tanggal Peminjaman</div>
            <div class="col-lg-4 col-md-8">Budi</div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-4 label ">Tanggal Pengembalian</div>
            <div class="col-lg-4 col-md-8">Budi</div>
        </div>
    </div>
    <div>
        <a href="/detail_peminjaman_sewa/create?id={{$id}}">Tambah Inventaris Ingin Dipinjam</a>
       <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Kategori</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listPinjaman as $l)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$l->nama}}</td>
                <td>{{$l->kategori}}</td>
                <td>{{$l->harga}}</td>
            </tr>
            @endforeach
        </tbody>
       </table>
    </div>
    <div>
        <a href="https://google.com" class="btn btn-primary">Selesai</a>
    </div>
</body>
</html>