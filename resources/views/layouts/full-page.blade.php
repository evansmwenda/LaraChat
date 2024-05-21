{{-- resources/views/layouts/full-page.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
    @filamentStyles
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    @filamentScripts
</body>
</html>
