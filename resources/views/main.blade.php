<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chính</title>
    @vite('resources/css/app.css')
</head>
<body>
  @include('layouts.header')
  <main>
    <h1 class="text-3xl font-bold underline">
      Hello world 123
    </h1>
  </main>
  @include('layouts.footer')
</body>
</html>