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
    <form action="">
        <div class="row">
            <div class="col-lg-6">
             <div class="form-group">
              <label>Tanggal Peminjaman</label>
              <div class="input-group date">
               <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
                  <input placeholder="Tanggal Peminjaman" type="text" class="form-control datepicker" name="tgl_awal">
              </div>
             </div>
             <div class="form-group">
              <label>Tanggal Pengembalian</label>
              <div class="input-group date">
               <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
                  <input placeholder="Tanggal Pengembalian" type="text" class="form-control datepicker" name="tgl_akhir">
              </div>
             </div>
            </div>
           </div>
           <div class="mb3">
               <button type="submit" class="btn btn-success">Kirim</button>
           </div>
    </form>
    <script type="text/javascript">
        $('.date').datepicker({  
           format: 'mm-dd-yyyy'
         });  
    </script> 
</body>
</html>