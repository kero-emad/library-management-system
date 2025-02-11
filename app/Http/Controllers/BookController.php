<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        return View('book.create');
    }
    public function store(Request $request)
    {
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price
        ];
        Book::create($data);
        $books=Book::all();
        return view('book.index',compact('books'));
    }
    public function index()
    {
        $books=Book::all();
        return view('book.index',compact('books'));
    }
    public function update ($id)
    {
        $book=Book::find($id);
        return view ('book.update',compact('book'));
    }
    public function edit (Request $request)
    {
        $id=$request->id;
        $book=Book::find($id);
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price
        ];
        $book->update($data);
        $books=Book::all();
        return view('book.index',compact('books'));
    }
    public function delete($id)
    {
        $book=Book::find($id);
        $book->delete();
        $books=Book::all();
        return view('book.index',compact('books'));
    }
    public function show($id)
    {
        $book=Book::find($id);
        return view('book.show',compact('book'));
    }
}
