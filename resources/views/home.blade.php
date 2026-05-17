<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24">

        {{-- Leblanc Background --}}
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/step-inside.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        {{-- Brightness 70 --}}
        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        {{-- Banner? --}}
        <div class="relative z-20 flex flex-col px-10 max-w-4xl">
            <h1 class="font-heading text-5xl text-p5-white uppercase tracking-tighter">
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

        {{-- Persona 5 Chatbox ref: http://www.p5generator.com/ --}}
        <div class="w-full flex justify-center items-end mt-40 mx-auto px-10">

            <div class="relative w-full min-h-40 bg-p5-black border-t-4 border-p5-red p-5 shadow-2xl">

                {{-- Morgana  --}}
                <div class="absolute -top-25 z-10">
                    <img src="{{ asset('assets/images/morgana.png') }}" class="w-32 h-32 object-contain" alt="Morgana">
                </div>

                <div class="flex flex-col md:flex-row items-start gap-5 relative z-10">
                    {{-- Name --}}
                    <div
                        class="bg-p5-red text-white px-4 py-1 font-heading uppercase italic font-bold text-sm tracking-widest shadow-p5">
                        Morgana
                    </div>

                    {{-- Dialogue --}}
                    <div class="text-p5-white text-xl md:text-2xl font-body italic leading-relaxed">
                        "The perfect place to relax and plan our next heist... <br>
                        Though I'd prefer some high-quality sushi over coffee right now, don't you think?"
                    </div>
                </div>
            </div>

        </div>

        {{-- Down --}}
        <div class="relative z-20 container mx-auto px-10 mt-20">

            <div class="text-center mb-16">
                <h2 class="font-heading text-3xl text-white uppercase tracking-widest">
                    The Soul of <span class="text-p5-red">Leblanc</span>
                </h2>
                <div class="h-1 w-50 bg-p5-red mx-auto mt-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="bg-p5-black/60 border-t-2 border-p5-red p-8 shadow-xl transition-all duration-300 hover:bg-p5-black/80">
                    <div class="text-p5-red text-4xl mb-4">
                        <iconify-icon icon="mdi:music-note" class="w-10 h-10"></iconify-icon>
                    </div>
                    <h3 class="font-heading text-white text-xl uppercase mb-3">Late-Night Jazz</h3>
                    <p class="font-body text-p5-grey text-sm leading-relaxed italic">
                        Soft jazz echoes through the café as the city slowly falls asleep.
                        The warm atmosphere of Leblanc offers a rare moment of peace away from the chaos of Tokyo.
                    </p>
                </div>

                <div
                    class="bg-p5-black/60 border-t-2 border-p5-red p-8 shadow-xl transition-all duration-300 hover:bg-p5-black/80">
                    <div class="text-p5-red text-4xl mb-4">
                        <iconify-icon icon="mdi:coffee" class="w-10 h-10"></iconify-icon>
                    </div>
                    <h3 class="font-heading text-white text-xl uppercase mb-3">Signature Brew</h3>
                    <p class="font-body text-p5-grey text-sm leading-relaxed italic">
                        Every cup is carefully prepared by Sojiro Sakura himself,
                        blending rich aroma and deep flavor into the perfect evening companion.
                    </p>
                </div>

                <div
                    class="bg-p5-black/60 border-t-2 border-p5-red p-8 shadow-xl transition-all duration-300 hover:bg-p5-black/80">
                    <div class="text-p5-red text-4xl mb-4">
                        <iconify-icon icon="material-symbols:japanese-curry" class="w-10 h-10"></iconify-icon>
                    </div>
                    <h3 class="font-heading text-white text-xl uppercase mb-3">Homemade Curry</h3>
                    <p class="font-body text-p5-grey text-sm leading-relaxed italic">
                        Leblanc’s famous curry is slow-cooked with care,
                        creating the comforting flavor loved by every regular customer.
                    </p>
                </div>

            </div>
        </div>

    </div>
</x-layout>
