<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/bootstrap.css', 'resources/css/styles.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.header')

    <main class="flex-shrink-0">
        <div class="container" id="content">
            <h1 class="mt-5">@yield('page-title')</h1>
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')
</body>

</html>
