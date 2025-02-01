<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create()
    {
        return View('create');
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
        return View('success');
    }
}
