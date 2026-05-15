<x-layout>
    <x-slot:judul>
        Home Page
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col items-center justify-center py-24 overflow-hidden">

        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/leblanc-bg.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        <div class="relative z-20 flex flex-col items-center justify-center text-center px-4">
            <h1 class="font-heading text-7xl text-p5-white shadow-p5 uppercase italic tracking-tighter">
                Welcome to Café</span> <span class="text-p5-red">Leblanc</span>
            </h1>

            <p class="font-body text-p5-grey mt-6 text-2xl max-w-2xl leading-relaxed">
                A quiet corner in Yongen-Jawa. <br>
                <span class="text-p5-white font-bold">Savor the silence, taste the secret.</span>
            </p>

            <div class="mt-12 transform -rotate-2 hover:rotate-0 transition-transform duration-300">
                <a href="/order"
                    class="bg-p5-red text-p5-white font-black px-8 py-4 text-xl uppercase italic tracking-widest shadow-p5 inline-block">
                    Step Inside
                </a>
            </div>
        </div>
    </div>
</x-layout>
