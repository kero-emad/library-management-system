<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div class="d-flex" id="wrapper">
        

        <div class="bg-dark text-white col-md-3 p-3" id="sidebar">
            <h4 class="text-center mb-4"><i class="bi bi-book" style="font-size: 1.5rem; margin-right: 10px;"></i>Library Management System</h4>
            <ul class="nav flex-column">

                @guest
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white" href="/signup"><i class="fas fa-user-plus"></i>Sign Up</a>
                </li>
                @endguest


                @auth
                <p>Welcome {{  Auth::user()->name }}</p>
                <a class="nav-link text-white" href="/logout"><i class="fas fa-user-plus"></i>Logout</a>
                @endauth
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('author.index') }}"> <i class="fas fa-user-tie"></i>ِAuthors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('book.index') }}"><i class="fas fa-book-open"></i>Books</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('category.index') }}"><i class="fas fa-tags"></i>Categories</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('student.index') }}"> <i class="fas fa-user-graduate"></i>Students</a>
                </li>

                
            </ul>
        </div>



        <div id="page-content-wrapper" class="col-md-9">



            <nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand mb-0 h1" style="text-align:center; margin-left:180px;">Welcome to the Library Management System<br> Your way to manage books,authors,students and users</span>
    </div>
</nav>


            <main class="container mt-4">
                @yield('content')
            </main>
        </div>
    </div>


    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; BackEnd Course 2025</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>