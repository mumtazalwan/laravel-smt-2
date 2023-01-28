@extends('layout.main')

@section("content")
<div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 align="center">Tambah Data buku</h3>
                        <form action="add/" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Nama</label>
                                <input required type="name" value="{{ old('nama')}}" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Author</label>
                                <input required type="name" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama author" name="nama_pengarang">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Publisher</label>
                                <select class="form-control" name="publisher_id">
                                    @foreach ($publishers as $publisher)
                                        <option name="publisher_id" value="{{$publisher->id}}">{{$publisher->nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="price">Price</label>
                                <input required type="number" class="form-control" id="price" placeholder="Price" name="harga">
                            </div>

                            <div class="form-group mb-3">
                                <label for="release">Date Release</label>
                                <input required type="date" class="form-control" id="release" placeholder="Masukkan Umur" name="tgl_rilis">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection