<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Book;
use App\Models\Publisher;

class DashboardController extends Controller
{

    public static function dashboard(){
        return view(
            'dashboard.index', [
                'dashboard' => User::all()
            ]
        );
    }

    public static function index(){
        return view(
            'dashboard.book.book', [
                'books' => Book::all()
            ]
        );
    }

    public static function show(Book $book){
        return view(
            'dashboard.book.detail', [
                'books' => $book]
        ); // detail book
    }

    public function create(){
        return view ('/dashboard.book.create', [
            'publishers' => Publisher::all() // mengambil data publisher
        ]);
    }

    public function store(Request $request){
        $validateDate = $request->validate([
            'publisher_id' => 'required',
            'nama' => 'required|max:255',
            'nama_pengarang' => 'required|max:255',
            'harga' => 'required',
            'tgl_rilis' => 'required',
        ]);
        Book::create($validateDate);
        return redirect('/dashboard/books/all')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy(Book $book){
        Book::destroy($book->id);
        return redirect('/dashboard/books/all')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Book $book){
        return view ('/dashboard.book.edit', [
            'book' => $book,
            'publishers' => Publisher::all() // mengambil data publisher
        ]);
    }

    public function update(Request $request, Book $book){
        $validateDate = $request->validate([
            'publisher_id' => 'required',
            'nama' => 'required|max:255',
            'nama_pengarang' => 'required|max:255',
            'harga' => 'required',
            'tgl_rilis' => 'required',
        ]);

        Book::where('id', $book->id)
            ->update($validateDate);
        return redirect('/books/all')->with('success', 'Data berhasil diubah');
    }

    public static function index2(){
        return view(
            'dashboard.publisher.publisher', [
                'publishers' => Publisher::all()
            ]
        );
    }

    public static function show2(Publisher $publisher){
        return view(
            'publisher.detailP', [
                'publisher' => $publisher]
        );
    }

}
