@extends('app')
@section('content')
<html>
<head>
    <style>
        table{
        border: 1px solid;
        width: 90%;
        /*margin-left: auto;
        margin-right: auto;*/
        text-align:center;
         }   
        
         table, th, td {
          text-align:center;
        border: 1px solid;
        }   
        
        
     button{  
            width: 70px;
            height:50px;
            padding: 10px;
            margin:10px;
            text-align: center;
            border-radius: 5px;
            background:white;
            color:#4E9CAF;
        } 
        button:hover
        {
            color:white;
            background:#4E9CAF;
             cursor:pointer;
        }    
    </style>
</head>
<body>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
               <a href="/students/show/{{  $student->id  }}"><button>Show</button></a>
               <a href="/students/update/{{  $student->id  }}"><button>Update</button></a>
               <a href="/students/delete/{{  $student->id  }}"><button>Delete</button></a>
            
    </tr>
      @endforeach
      </tbody>
    </table>
    <button class="btn btn-primary" style="height:70px; width:200px;"><a href="/students/create" style="text-decoration:none; color:white;">New Student</a></button>
      </div>
@endsection