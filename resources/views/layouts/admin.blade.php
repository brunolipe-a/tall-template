<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="init()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>@yield('title')</title>
  @client
  @vite('initTemplate')
  @vite('main')

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"
    integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  @livewireStyles
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <x-sidebar.desktop />
    <x-sidebar.mobile />
    <div class="flex flex-col flex-1 w-full">
      <x-header.index />
      <main class="h-full overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <x-admin.page-title>
            @yield('title')
          </x-admin.page-title>
          <x-common.alert />
          @yield('content')
        </div>
      </main>
    </div>
  </div>
  @stack('scripts')
  @livewireScripts
</body>

</html>
