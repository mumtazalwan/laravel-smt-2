@extends('dashboard.layout.main')

@section('content')
<a type="button" class="" href="/dashboard/books/create">Tambah</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Pengarrang</th>
      <th scope="col">Harga</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($books as $books):?>
    <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->nama}}</td>
      <td>{{$books->nama_pengarang}}</td>
      <td>{{$books->harga}}</td>
      <td><a type="button" class="btn btn-outline-primary" href="/dashboard/books/detail/{{ $books['id']}}">Detail</a>
      <a type="button" class="btn btn-warning" data-toggle="modal" href="/dashboard/books/edit/{{ $books->id }}">Edit</a>
        <form action="/book/delete/{{ $books->id }}" method="post" style="display: inline;">
          @method('delete')
          @csrf
        <button class="btn btn-danger" onClick="return confirm('Are you sure ?')">Hapus</button>
        </form></td>
      <td></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
@endsection 