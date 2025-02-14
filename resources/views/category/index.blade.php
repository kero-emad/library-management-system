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
        <th>Description</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
               <a href="/categories/show/{{  $category->id  }}"><button>Show</button></a>
               <a href="/categories/update/{{  $category->id  }}"><button>Update</button></a>
               <a href="/categories/delete/{{  $category->id  }}"><button>Delete</button></a>
            
    </tr>
      @endforeach
      </tbody>
    </table>
    <button class="btn btn-primary" style="height:70px; width:200px;"><a href="/categories/create" style="text-decoration:none; color:white;">New Category</a></button>
      </div>
@endsection