<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Trang chính')</title>

  @vite('resources/css/app.css')
  @vite('resources/css/header.css')
  @vite('resources/css/footer.css')
  @vite('resources/js/app.js')

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body style="margin:0">

  @include('layouts.header')

  <main style="min-height: 100vh">
    @yield('content')
  </main>

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  @yield('scripts')

  @include('layouts.footer')

</body>
</html>
