<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    {{-- <title>{{ env('APP_NAME') }} | {{ $title ?? 'Libros' }}</title> --}}
    <title>{{ env('APP_NAME') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    {{-- Menu --}}
    <x-menu />

    {{-- Content --}}
    <main id="app" class="mt-5 pt-5">
        {{ $slot }}
    </main>

    {{-- {{ $scripts ?? '' }} --}}
</body>

</html>
