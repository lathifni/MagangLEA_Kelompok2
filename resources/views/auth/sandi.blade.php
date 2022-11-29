@extends('layout.app')

@section('head')
    <div class="col-md-5 align-self-center" style="border-block-start: ">
        <h3 class="text">Edit Data User</h3>
    </div>
@endsection
@section('content')
    <form action="/ganti" method="post">

        @csrf
        <div class="mb-3">
            <label for="passlama">Password Lama :  </label>
            <input type="text" class="form-control  " id="password" name="password">
        </div>

        <div class="mb-3">
            <label for="passlama">Password Baru :</label>
            <input type="text" class="form-control rounded-left" id="password" name="password">
        </div>

        <div class="mb-3">
            <label for="passlama">Ketik Password Baru :</label>
            <input type="text" class="form-control rounded-left" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-success " style="background-color :blue">ubah</button>
        <form action="">
        <a href="" class=" btn" style="background-color: grey"> batal</a>
    </form>
    </form>
    
@endsection
