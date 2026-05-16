<x-layout>
    <x-slot:judul>
        Order Menu
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24">

        {{-- Leblanc Background --}}
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/leblanc-bg.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        {{-- Brightness 70 --}}
        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        <div class="relative z-20 container mx-auto px-10">

            {{-- Menu --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                @foreach ($foods as $f)
                    <div
                        class="bg-p5-black/60 border-l-4 border-p5-red p-5 shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer">
                        <h2 class="font-heading text-white text-2xl uppercase">
                            {{ $f['name'] }}
                        </h2>
                        <p class="text-p5-red font-bold text-xl mt-1">
                            ¥ {{ $f['price'] }}
                        </p>
                        <p class="font-body text-p5-grey text-sm mt-2 leading-relaxed">
                            {{ $f['desc'] }}
                        </p>
                    </div>
                @endforeach

            </div>

            {{-- Persona 5 Chatbox ref: http://www.p5generator.com/ --}}
            <div class="w-full flex justify-center items-end mt-25">

                <div class="relative w-full min-h-30 bg-p5-black/80 border-t-4 border-p5-red p-5 shadow-2xl">

                    {{-- Sojiro  --}}
                    <div class="absolute -top-20 left-10">
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
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit."
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-layout>
