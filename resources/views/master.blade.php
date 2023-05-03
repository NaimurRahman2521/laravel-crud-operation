<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <title>Laravel Crud</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light shadow">
    <div class="container">
        <a href="{{route('product.add')}}" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('product.add')}}" class="nav-link">Add</a></li>
            <li><a href="{{route('product.manage')}}" class="nav-link">Manage</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
