<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return View('student.index',compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;

       $data=[
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone
       ];

       Student::create($data);
       $students=Student::all();
       return View('student.index',compact('students'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        return View('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $id=$request->id;
        $student=Student::find($id);
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
        ];
        $student->update($data);
        $students=Student::all();
        return view('student.index',compact('students'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $student=Student::find($id);
        return View('student.update',compact('student'));
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $student=Student::find($id);
        $student->delete();
        $students=student::all();
        return View('student.index',compact('students'));
    }
}
