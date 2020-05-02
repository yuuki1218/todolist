<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrg-token" content="{{ csrf_token() }}">
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="https://fonts.googleapis.com/css? family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/admin.css') }}">
    
    <title>@yield('title')</title>
    
</head>
<header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-link" href="#">Posts</li>
                    </ul>
                </div>
        </nav>
        <main class="py-6">
            @yield('content')
        </main>
    </div>
</header>
</html>