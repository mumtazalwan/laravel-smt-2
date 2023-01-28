@extends('layout.main')

@section('inside')
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Pengarrang</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($books as $books):?>
    <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->nama}}</td>
      <td>{{$books->nama_pengarang}}</td>
      <td>{{$books->harga}}</td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
@endsection 