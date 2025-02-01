<html>
    <head>
        <style>
            body {
       font-family: Arial, sans-serif;
       background-color: #f4f4f4;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 100vh;
       margin: 0;
                }

    form {
     background: white;
     padding: 20px;
     border-radius: 10px;
     box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
     width: 350px;
  }

   fieldset {
    border: none;
    padding: 0;
 }


  label {
    font-weight: bold;
    color: #555;
   }

input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

textarea {
    resize: none;
}
        #submit
        {
        width: 80px;
        height: 40px;
        padding: 10px;
        margin: 10px;
        text-align: center;
        border-radius: 5px;
        background: white;
        color: #4E9CAF;
        }
        #submit:hover {
        color: white;
        background: #4E9CAF;
        cursor: pointer;
      }
        </style>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
    @csrf
    <fieldset>
        <label>Name</label><br><br>
        <input type="text" name="name"><br><br>
        <label>description</label><br><br>
        <textarea cols=40 rows=5 name="description"></textarea><br><br>
        <label>price</label><br><br>
        <input type="text" name="price"><br><br>
        <input type="submit" id="submit" name="submit" value="Add">
</fieldset>
     </form>
</body>
</html>