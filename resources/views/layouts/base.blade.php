<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-100">
        <div class="container">
            <a href="r{{ route('dashboard') }}" class="navbar-brand">Library</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="r{{ route('dashboard') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="" class="nav-link">Service</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0">
                <div class="div b-dark p-0" style="height: 90vh">
                    <div class="list-group p-0">
                        <a href="{{ route('dashboard') }}" class="list-group-item rounded-0 list-group-item-action bg-dark text-white-50 bg-opacity-100">Dashboard</a>
                        <a href="{{ route('manage.books') }}" class="list-group-item rounded-0 list-group-item-action bg-dark text-white-50 bg-opacity-100">Manage Books</a>
                        <a href="" class="list-group-item rounded-0 list-group-item-action bg-dark text-white-50 bg-opacity-100">Add Book</a>
                        <a href="" class="list-group-item rounded-0 list-group-item-action bg-dark text-white-50 bg-opacity-100">Add entry</a>
                    </div>
                </div>
            </div>
            <div class="col-9">
                @yield('content')
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
