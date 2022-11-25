<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Awal Peminjaman</h5>
            <form action="/peminjaman_sewa/create?id={{$id}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                     <div class="form-group">
                      <br><label>Tanggal Peminjaman</label>
                      <div class="input-group date">
                       <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input placeholder="Tanggal Peminjaman" type="text" class="form-control datepicker" name="tanggal_transaksi_pengembalian">
                      </div>
                     </div>
                     <div class="form-group">
                      <br><label>Tanggal Pengembalian</label>
                      <div class="input-group date">
                       <div class="input-group-addon">
                              <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input placeholder="Tanggal Pengembalian" type="text" class="form-control datepicker" name="tanggal_dikembalikan">
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="form-group">
                    <br><label>Anggota</label>
                    <div class="col-md-6">
                        <select name="id_anggota" id="id_anggota" class="form-control">
                            <option value="">== Pilih Anggota ==</option>
                            @foreach ($anggota as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                   <div class="mb3">
                       <br><button type="submit" class="btn btn-success">Kirim</button>
                   </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $('.date').datepicker({  
           format: 'yyyy-m-d'
         });  
    </script> 
</body>
</html>