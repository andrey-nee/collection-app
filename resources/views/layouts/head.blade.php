<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>

{{-- Если необходимо использовать jQuery скрипты внутри blade файлов (инлайново), --}}
{{-- нужно подключить jQuery напрямую, а НЕ через Vite. --}}
{{-- Для этого просто раскомментируйте следующую строчку: --}}
<script src="{{ asset('jquery-3.7.1.min.js') }}"></script>

@vite(['resources/css/bootstrap.min.css', 'resources/css/datatables.min.css', 'resources/css/select2.min.css', 'resources/sass/app.scss', 'resources/js/bootstrap.bundle.min.js', 'resources/js/datatables.min.js', 'resources/js/select2.full.min.js', 'resources/js/app.js'])
