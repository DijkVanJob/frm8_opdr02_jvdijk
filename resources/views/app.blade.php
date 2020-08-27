<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
        <a class="navbar-brand" href="/">ContactApp</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <section class="container">
        @yield('content')
    </section>
    <footer style="height: 10vh" class="d-flex justify-content-center align-items-end  w-100 bg-secondary">
        <p class="text-center bg-danger">pap</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>