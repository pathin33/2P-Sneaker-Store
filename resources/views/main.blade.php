<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chính</title>
    @vite('resources/css/app.css')    {{--cấu hình css tailwind--}}
    @vite('resources/css/header.css')  {{-- cấu hình css thuần cho header và footer nhé --}}
    @vite('resources/css/footer.css')
    @vite('resources/js/app.js')
</head>
<body>
  @include('layouts.header') {{--import header và footer--}}
  <main> {{--main chính tạm thời chưa động tới --}}
    <h1 class="text-3xl font-bold underline">
      Đây là main
    </h1>
  </main>
  @include('layouts.footer')
</body>
</html>
