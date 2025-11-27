<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir</title>

    <!-- Tailwind CDN (wajib kalau pakai class tailwind) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tempat untuk menerima CSS dari @push('style') -->
    @stack('style')
</head>
<body class="bg-gray-100">

    @include('kasir.layout_kasir.sidebar_kasir')

    <div class="ml-64 p-8 min-h-screen">
        @yield('content')
    </div>

</body>
</html>
