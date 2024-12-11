<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite('resources/css/app.css')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body>
    <livewire:layout.header />
    <div class="container mx-auto">
        {{ $slot }}
    </div>
    <livewire:layout.footer />

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>