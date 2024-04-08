<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSRF Token --}}
  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <title>@yield('title')</title>

  {{-- Если необходимо использовать jQuery скрипты внутри blade файлов (инлайново), --}}
  {{-- нужно подключить jQuery напрямую, а НЕ через Vite. --}}
  {{-- Для этого просто раскомментируйте следующую строчку: --}}
  <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>

  @vite(['resources/css/bootstrap.min.css', 'resources/sass/app.scss', 'resources/js/bootstrap.bundle.min.js', 'resources/js/app.js'])

</head>

<body class="d-flex flex-column h-100">
  @include('layouts.header')

  <main class="flex-shrink-0">
    <div class="container" id="content">
      <h1 class="mt-5">@yield('page-title')</h1>
      @yield('content')
    </div>
  </main>

  {{-- <div class="modal fade" id="newCollection" tabindex="-1" aria-labelledby="newCollectionLabel" aria-hidden="true"> --}}
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal">@yield('modal-title')</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @yield('modal-body')
        </div>
        <div class="modal-footer">
          @yield('modal-footer')
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')

  {{-- Если в блейдах у вас есть скрипты написанные на jQuery, --}}
  {{-- нужно подключить jQuery напрямую, а НЕ через Vite. --}}
  {{-- Подробно см. комментарии выше в <head> --}}
  @yield('custom-script')

</body>
</html>
