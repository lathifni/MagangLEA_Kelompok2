@extends('layout.app')
@section("head")
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


                                    <div class="mt-3">
                                        <input type="text" id="name" value="{{$user->name}}" name="name">
                                        <h4 type="text" name="name" id="name" value="{{ $user->name }}"></h4>
                                        <p class="text-secondary mb-1" name="alamat" id="alamat"
                                            value="{{ $user->alamat }}"></p>
                                        <p class="text-muted font-size-sm"name="email" id=email
                                            value="{{ $user->email }}"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">

                            </ul>
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
                                        <p value="{{ $user->name }}"></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value="{{ $user->email }}"></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value="{{ $user->alamat }}"></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ROle</h6>
                                    </div>
                                    <div class="col-sm-ROle9 text-secondary">
                                        <p value="{{ $user->role }}"> </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">no_hp</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <p value=" {{ $user->no_hp }}"></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Jenis_kelamin</h6>
                                    </div>
                                    <div class="col-sm-ROle9 text-secondary">
                                        <p value=" {{ $user->jenis_kelamin }}"></p>
                                    </div>
                                </div>
                                <hr>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " target="__blank"
                                            href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
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
