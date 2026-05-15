     <!DOCTYPE html>
     <html lang="en">

     <head>

         <meta charset="UTF-8">

         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>{{ $judul }} | Leblanc Cafe</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])

     </head>

     <body
         class="bg-p5-black text-p5-white antialiased selection:bg-p5-red selection:text-white flex flex-col min-h-screen">

         <x-navbar />

         <main class="grow relative">
             <x-header>{{ $judul }}</x-header>
             {{ $slot }}
         </main>

         <footer class="relative z-30 py-8 text-center text-p5-grey text-sm border-t-2 border-p5-red bg-p5-black">
             &copy; {{ date('Y') }} Leblanc Cafe - Persona 5.
         </footer>

         <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
     </body>

     </html>
