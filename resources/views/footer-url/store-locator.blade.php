<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Trang tìm kiếm cửa hàng</title>
    @vite(['resources/css/app.css', 'resources/css/footer.css']) {{-- Gọi cả CSS tailwind và CSS thuần --}}
</head>

<body>
    @include('layouts.header')

    <div class="store-locator-body">
        <h1 style="color: #007BFF; font-size: 32px; font-weight: bold;">
            Trang tìm kiếm cửa hàng
        </h1>
        <p>Đây là trang tìm kiếm</p>
    </div>

    @include('layouts.footer')
</body>

</html>