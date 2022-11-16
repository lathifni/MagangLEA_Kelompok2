<!doctype html>
<html lang="en">
  <head>
    <title>Login | Inventaris</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
        rel="stylesheet"
    />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="../css/loginstyle.css" />
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center">Login</h2>

      <form action="/login" method="post" class = "w-50 mx-auto">
        @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="text" class="form-control" id="email" placeholder="Masukkan email..." name="email">
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password :</label>
        <input type="password" class="form-control" id="password" placeholder="masukkan password..."name="password" min="1">
        
      </div>
     
      
      <div class="mb-3">
        <button type="submit" class="btn btn-success"> Login </button>
      
      </div>
      </form> 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>