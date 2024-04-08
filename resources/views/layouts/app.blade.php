<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  @include('layouts.head')
</head>

<body class="d-flex flex-column h-100">

  <header class="main-header p-3">
    @include('layouts.header')
  </header>

  <main class="flex-shrink-0">
    <div class="container" id="content">
      <h1 class="mt-5">@yield('page-title')</h1>
      @yield('content')
    </div>
  </main>

  {{-- Modal Add New --}}
  @include('modals.layouts.main-add')

  <footer class="main-footer footer py-3 my-4 mt-auto bg-body-tertiary">
    @include('layouts.footer')
  </footer>

  {{-- Если в блейдах у вас есть скрипты написанные на jQuery, --}}
  {{-- нужно подключить jQuery напрямую, а НЕ через Vite. --}}
  {{-- Подробно см. комментарии выше в <head> --}}
  @yield('custom-script')

</body>

</html>
