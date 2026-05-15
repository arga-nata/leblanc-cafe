<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }} | Leblanc Cafe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-p5-black text-p5-white antialiased selection:bg-p5-red selection:text-white">

    <x-navbar />

    <main class="min-h-screen relative">
        <div class="{{ request()->is('home') ? 'absolute top-0 left-0 w-full z-30' : '' }}">
            <x-header>{{ $judul }}</x-header>
        </div>

        @if (!request()->is('home'))
            <div class="container mx-auto px-4 py-8">
                {{ $slot }}
            </div>
        @else
            {{ $slot }}
        @endif
    </main>

    <footer class="py-8 text-center text-p5-grey text-sm border-t border-p5-dark-red/50">
        &copy; {{ date('Y') }} Leblanc Cafe - Persona 5.
    </footer>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</body>


</html>
