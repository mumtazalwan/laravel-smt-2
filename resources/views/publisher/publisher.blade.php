@extends('layout.main')

@section('inside')
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
    <tbody>
    @foreach ($publishers as $publishers)
    <tr>
      <th scope="row">{{$publishers->id}}</th>
      <td>{{$publishers->nama}}</td>
      <td>{{$publishers->email}}</td>
      <td>{{$publishers->alamat}}</td>  
    </tr>
    @endforeach
  </tbody>
</table>
@endsection