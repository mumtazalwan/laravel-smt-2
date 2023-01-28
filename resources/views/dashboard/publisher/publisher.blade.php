@extends("dashboard.layout.main")

@section('content')
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
    <tbody>
    @foreach ($publishers as $publishers)
    <tr>
      <th scope="row">{{$publishers->id}}</th>
      <td>{{$publishers->nama}}</td>
      <td>{{$publishers->email}}</td>
      <td>{{$publishers->alamat}}</td>
      <td><a type="button" class="btn btn-outline-primary" href="/detailPublisher/{{$publishers['id']}}">Detail Publisher</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection