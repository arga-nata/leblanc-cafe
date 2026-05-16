<x-layout>
    <x-slot:judul>
        Café Leblanc: A Quiet Corner
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24">

        {{-- Leblanc Background --}}
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/leblanc-bg.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        {{-- Brightness 70 --}}
        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        {{-- Banner? --}}
        <div class="relative z-20 flex flex-col px-10 max-w-4xl">
            <h1 class="font-heading text-6xl text-p5-white uppercase tracking-tighter">
                Welcome to Café <span class="text-p5-red">Leblanc</span>
            </h1>

            <p class="font-body text-p5-grey mt-5 text-2xl leading-relaxed">
                A quiet corner in Yongen-Jaya. <br>
                <span class="text-p5-white font-bold">Savor the silence, taste the secret.</span>
            </p>

            <div class="mt-12 transition-transform duration-300">
                <a href="/order"
                    class="bg-p5-black/60 border-2 border-p5-red text-p5-white font-black px-8 py-4 text-xl uppercase tracking-widest shadow-p5 inline-block backdrop-blur-sm hover:bg-p5-red transition-all duration-300">
                    Step Inside
                </a>
            </div>
        </div>

        {{-- WIP --}}
        <div class="mt-32"></div>

    </div>
</x-layout>
