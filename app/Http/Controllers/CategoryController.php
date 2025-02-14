<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories=Category::all();
        return View('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name=$request->name;
        $description=$request->description;
        $data=[
            'name'=>$name,
            'description'=>$description
        ];
        Category::create($data);
        $categories=Category::all();
        return View('category.index',compact('categories'));       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $category=Category::find($id);
        return View('category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $id=$request->id;
        $category=Category::find($id);
        $name=$request->name;
        $description=$request->description;
        $data=[
            'name'=>$name,
            'description'=>$description
        ];
        $category->update($data);
        $categories=Category::all();
        return View('category.index',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        $category=Category::find($id);
        return View('Category.update',compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $category=Category::find($id);
        $category->delete();
        $categories=Category::all();
        return View('category.index',compact('categories'));
    }
}
