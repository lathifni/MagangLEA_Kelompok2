@extends("layout.app")

@section("head")
  <div class="col-md-5 align-self-center" style="border-block-start: ">
    <h3 class="text">Edit Data User</h3>
</div>  
@endsection
@section("content")



<form action="/user/{{$user->id}}" method="post">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">email:</label>
        <input type="text" class="form-control" id="name"
            value="{{ $user->name }}" name="name" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email:</label>
        <input type="email" class="form-control" id="email"
            value="{{ $user->email }}" name="email" readonly>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password"
            value="{{Hash::make( $user->password )}}" name='password'>
        <a href="/ganti" type="submit" class=" btn btn-primary">Change Password</a>
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role </label>
        <input type="text" class="form-control" id="role"
            value="{{ $user->role }}" name="role">

    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat </label>
        <input type="text" class="form-control" id="alamat"
            value="{{ $user->alamat }}" name="alamat">
        
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">no_hp</label>
        <input type="number" class="form-control" id="no_hp"
            value="{{ $user->no_hp }}" name="no_hp">

    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenis_kelamin"
            value="{{ $user->jenis_kelamin }}" name="jenis_kelamin">
    </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      <div class="mb-3">
        <a type="submit" class="btn btn-success" href="/user/list"><</a>
      </div>
</div>
</form>

@endsection