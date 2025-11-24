<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Minbell Admin' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100 text-gray-800 flex">

    {{-- SIDEBAR --}}
    @include('admin.layout.sidebar')

    {{-- CONTENT --}}
    <main class="ml-64 w-full p-8 min-h-screen">
        @yield('content')
    </main>

</body>
</html>
