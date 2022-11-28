@extends("layout.app")
@section()
  <div class="col-md-5 align-self-center" style="border-block-start: ">
        <h3 class="text">List User </h3>
    </div>  
@endsection
@section("content")

    


<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    
                    <a href="/tambah" target="blank">Tambah User</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>email</th>
                                <th>alamat</th>
                                <th>role</th>
                                <th>no_hp</th>
                                <th>jenis_kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $u)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>{{ $u->no_hp }}</td>
                                    <td>{{ $u->jenis_kelamin }}</td>
                                    <td>
                                        <a href="/user/{{ $u->id }}/edit"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil"></i>Edit</a>
                                        <a href="/user/{{ $u->id }}/delete"
                                            class="btn btn-warning">
                                            <i class="bi bi-trash"></i>Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection