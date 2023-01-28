@extends("layout.main")

@section('content')
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$publisher['id']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="{{$publisher['nama']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$publisher['email']}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="{{$publisher['alamat']}}">
  </div>
</form>
@endsection