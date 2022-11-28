@extends('layout.app')


@section('content')
    <form action="/user/tambah" class="login-form" method="post">

        @csrf
     
        <div>
            <div class="form-group">
       >
                <a href="/user/list">Data user</a>
            </div>
            <div class="form-group">
                <label for="name" class="form-labe" id="name">Name :</label>
                <input type="text" class="form-control rounded-left" placeholder="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="email" class="form-labe" id="email">Email :</label>
                <input type="email" class="form-control rounded-left" placeholder="email " name="email" required />
            </div>
            <div class="form-group">
                <label for="password" class="form-labe" id="password">Password : </label>
                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required />
            </div>
            <div>
                <label for="role" class="form-labe" id="role">Role :</label>
                <select name="role" class="form-control rounded-left" id="role">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <br>
            <div>
                <label for="alamat" class="form-labe" id="alamat">Alamat :</label>
                <input type="text" class="form-control rounded-left" placeholder="alamat" name="alamat" />
            </div>
            <br>
            <div>
                <label for="no_hp" class="form-labe" id="no_hp">No. HP :</label>
                <input type="number" class="form-control rounded-left" placeholder="no.hp" name="no_hp" />
            </div>
            <br>
            <div>
                <label for="jenis_kelamin" class="form-labe" id="jenis_kelamin">Jenis Kelamin
                    :</label>
                <select name="jenis_kelamin" class="form-control rounded-left" id="jenis_kelamin">
                    <option value="admin">Laki-laki</option>
                    <option value="staff">Perempuan</option>
                </select>

            </div>
            <div class="form-group d-md-flex">
                <!-- <div class="w-50">
                    <label
                        class="checkbox-wrap checkbox-primary"
                        >Remember Me
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                    </label>
                </div> -->
                <!-- <div class="w-30 text-md-right">
                    <a href="#">Forgot Password</a>
                </div> -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">
                    Tambah
                </button>
            </div>

        </div>
    </form>
@endsection
