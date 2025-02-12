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
        <th>Job Description</th>
        <th>Bio</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      @foreach($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->jobdescription }}</td>
            <td>{{ $author->bio }}</td>
            <td>
               <a href="/authors/show/{{  $author->id  }}"><button>Show</button></a>
               <a href="/authors/update/{{  $author->id  }}"><button>Update</button></a>
               <a href="/authors/delete/{{  $author->id  }}"><button>Delete</button></a>
            
    </tr>
      @endforeach
      </tbody>
    </table>
    <button class="btn btn-primary" style="height:70px; width:200px;"><a href="/authors/create" style="text-decoration:none; color:white;">New Author</a></button>
      </div>
@endsection