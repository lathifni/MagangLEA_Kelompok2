@extends('layout.app')
@section('head')
    <div class="col-md-5 align-self-center">
        <h3 class="text">Profile</h3>
    </div>
@endsection

@section('content')
    <form action="/profile/{{ $user->id }}" method="post">
        @method('put')
        @csrf

        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">

                                    <div class="contaier">
                                        <div class="mt-3">

                                            <h4 type="text" name="name" id="name">
                                                {{ old('name', Auth::user()->name) }}</h4>

                                            <h4 type="text" name="role" id="role">
                                                {{ old('role', Auth::user()->role) }}</h4>
                                            <p class="text-secondary mb-1 text-center" name="alamat" id="alamat">
                                                {{ old('alamat', Auth::user()->alamat) }}</p>

                                            <p class="text-muted font-size-sm text-center "name="email" id=email>
                                                {{ old('email', Auth::user()->email) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value="{{ old('name', Auth::user()->name) }}">
                                            {{ old('name', Auth::user()->name) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value="{{ old('email', Auth::user()->email) }}">
                                            {{ old('email', Auth::user()->email) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value="{{ old('alamat', Auth::user()->alamat) }}">
                                            {{ old('alamat', Auth::user()->alamat) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Role</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p>
                                            {{ old('role', Auth::user()->role) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">no. Hp</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value=" {{ old('no_hp', Auth::user()->no_hp) }}">
                                            {{ old('no_hp', Auth::user()->no_hp) }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p>
                                            {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) }}</p>
                                    </div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " href="/user/{{ old('name', Auth::user()->id) }}/edit">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>

            </div>
        </div>


    </form>
@endsection
