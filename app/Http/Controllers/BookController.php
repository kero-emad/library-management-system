<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Student;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        $authors=Author::all();
        $students=Student::all();
        $categories=Category::all();
        return View('book.create',compact('authors','students','categories'));
    }
    public function store(Request $request)
    {

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $extension=$image->extension();
            $filename="library".time().'.'.$extension;
            $image->move(public_path('uploads/images'),$filename);
        }
        

        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $author_id=$request->author_id;
        $Student_id=$request->Student_id;
        $image=$filename;

        
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id,
            'Student_id'=>$Student_id,
            'image'=>$image
        ];
        $book=Book::create($data);
        $categories_ids=$request->categories_ids;
        $book->categories()->attach($categories_ids);
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
        $students=Student::all();
        return view ('book.update',compact('book','authors','students'));
    }
    public function edit (Request $request)
    {
        $id=$request->id;
        $book=Book::find($id);

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $extension=$image->extension();
            $filename="library".time().'.'.$extension;
            $image->move(public_path('uploads/images'),$filename);
        }
        else
        {
            $filename=$book->image;
        }
        
        $name=$request->name;
        $description=$request->description;
        $price=$request->price;
        $author_id=$request->author_id;
        $Student_id=$request->Student_id;
        $image=$filename;
        $data=[
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'author_id'=>$author_id,
            'Student_id'=>$Student_id,
            'image'=>$image
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
