<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::all();
        return View('author.index',compact('authors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $image=$request->file('image');
            $extension=$image->extension();
            $filename="library".time().'.'.$extension;
            $image->move(public_path('uploads/images'),$filename);
        }
        $name=$request->name;
        $email=$request->email;
        $jobdescription=$request->jobdescription;
        $bio=$request->bio;
        $image=$filename;

        $data=[
            'name'=>$name,
            'email'=>$email,
            'jobdescription'=>$jobdescription,
            'bio'=>$bio,
            'image'=>$image
        ];
        Author::create($data);
        $authors=Author::all();
        return View('author.index',compact('authors'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $author=Author::find($id);
        return View('author.show',compact('author'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $id=$request->id;
        $author=Author::find($id);

        if ($request->hasFile('image')){
            $image=$request->file('image');
            $extension=$image->extension();
            $filename="library".time().'.'.$extension;
            $image->move(public_path('uploads/images'),$filename);
        }
        else
        {
            $filename=$author->image;
        }

        
        $name=$request->name;
        $email=$request->email;
        $jobdescription=$request->jobdescription;
        $bio=$request->bio;
        $image=$filename;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'jobdescription'=>$jobdescription,
            'bio'=>$bio,
            'image'=>$image
        ];
        $author->update($data);
        $authors=Author::all();
        return View('author.index',compact('authors'));

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $author=Author::find($id);
        return View('author.update',compact('author'));
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $author=Author::find($id);
        $author->delete();
        $authors=Author::all();
        return View('author.index',compact('authors'));
        //
    }
}
