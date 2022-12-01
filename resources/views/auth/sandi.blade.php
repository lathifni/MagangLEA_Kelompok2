@extends('layout.app')

@section('head')
    <div class="col-md-5 align-self-center" style="border-block-start: ">
        <h3 class="text">Password</h3>
    </div>
@endsection
@section('content')
    <form action="/ganti/sandi" method="post">
        @method('put')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="passlama">Password Lama : </label>
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
      
            <a href="user/{{$user->id}}/edit  " class=" btn" style="background-color: grey"> batal</a>
        
    </form>
@endsection
