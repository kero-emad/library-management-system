<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Student;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        $authors=Author::all();
        $students=Student::all();
        return View('book.create',compact('authors','students'));
    }
    public function store(Request $request)
    {
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $author_id=$request->author_id;
        $Student_id=$request->Student_id;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id,
            'Student_id'=>$Student_id
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
        $authors=Author::all();
        return view ('book.update',compact('book','authors'));
    }
    public function edit (Request $request)
    {
        $id=$request->id;
        $book=Book::find($id);
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $author_id=$request->author_id;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id
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
        $author = Author::find($book->author_id);
        $student=Student::find($book->Student_id);
        return view('book.show',compact('book','author','student'));
    }
}
