<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('comics.index') }}">Home</a></li>
                <li><a href="{{ route('comics.create') }}">Create New Comic</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="text-center mt-5">
        <p>&copy; DC Comics Archive</p>
    </footer>
</body>
</html>
