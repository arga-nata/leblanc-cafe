<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24">

        {{-- Leblanc Background --}}
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/coba.gif') }}" class="w-full h-full object-cover" alt="Leblanc Background">
        </div>

        {{-- Brightness 60 --}}
        <div class="fixed inset-0 z-10 bg-p5-black/60"></div>

        <div class="relative z-20 container mx-auto px-10">

            <div class="bg-p5-black/60 border-l-4 border-p5-red p-10 shadow-xl">
                <h2 class="font-heading text-white text-4xl uppercase">
                    {{ $food['name'] }}
                </h2>
                <p class="text-p5-red font-bold text-2xl mt-2">
                    ¥ {{ $food['price'] }}
                </p>
                <p class="font-body text-p5-grey text-lg mt-5 leading-relaxed italic">
                    {{ $food['desc'] }}
                </p>
                <a href="/order"
                    class="bg-p5-black/60 border-2 border-p5-red text-p5-white font-black px-8 py-4 text-xl uppercase tracking-widest shadow-p5 inline-block backdrop-blur-sm hover:bg-p5-red transition-all duration-300 mt-5">
                    Back to Menu
                </a>
            </div>

            {{-- Persona 5 Chatbox ref: http://www.p5generator.com/ --}}
            <div class="w-full flex justify-center items-end mt-40">

                <div class="relative w-full min-h-40 bg-p5-black border-t-4 border-p5-red p-5 shadow-2xl">

                    {{-- Sojiro  --}}
                    <div class="absolute -top-25">
                        <img src="{{ asset('assets/images/sojiro.png') }}" class="w-32 h-32 object-contain"
                            alt="Sojiro Sakura">
                    </div>

                    <div class="flex flex-col md:flex-row items-start gap-5 relative z-10">
                        {{-- Name --}}
                        <div
                            class="bg-p5-red text-white px-4 py-1 font-heading uppercase italic font-bold text-sm tracking-widest shadow-p5">
                            Sojiro Sakura
                        </div>

                        {{-- Dialogue --}}
                        <div class="text-p5-white text-xl md:text-2xl font-body italic leading-relaxed">
                            "Take your time. Good coffee and good curry can't be rushed."
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-layout>
