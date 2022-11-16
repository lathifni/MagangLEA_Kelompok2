<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>
   
        
  <body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Inventaris</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              {{-- <a class="nav-link text-white" aria-current="page" href="/produk/List">Produk</a> --}}
              {{-- <a class="nav-link text-white" href="customer/List">Customer</a> --}}
              {{-- <a class="nav-link text-white" href="transaksi/List">Transaksi</a> --}}
              {{-- <a class="nav-link text-white" href="#"> --}}
                  <form action="/logout" method="post">
                       @csrf
                     <button type="submit" class="btn border-0 text-white">Logout</button>
                  </form>
              </a>

            </div>
          </div>
        </div>
      </nav>

    <div class="container mt-5 pt-5">

        @yield("content")
    
    </div>

   <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>