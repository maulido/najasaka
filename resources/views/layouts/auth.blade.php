<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Najasaka') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">
    <main class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-6">
            @yield('content')
        </div>
    </main>
</body>

</html>
