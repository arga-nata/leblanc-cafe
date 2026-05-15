<x-layout>
    <x-slot:judul>
        Order Menu
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24 overflow-hidden">

        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/leblanc-bg.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        <div class="relative z-20 container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                @foreach ($arrayName as $menu)
                    <div
                        class="bg-p5-black/60 border-l-4 border-p5-red p-6 shadow-xl transition-all duration-300 hover:scale-105 cursor-pointer">
                        <h2 class="font-heading text-white text-2xl uppercase">
                            {{ $menu['name'] }}
                        </h2>
                        <p class="text-p5-red font-bold text-xl mt-1">
                            ¥ {{ $menu['price'] }}
                        </p>
                        <p class="font-body text-p5-grey text-sm mt-3 leading-relaxed">
                            {{ $menu['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="w-full flex justify-center items-end mt-25">

                <div
                    class="relative w-full min-h-30 bg-p5-black/95 border-t-4 border-p5-red p-6 backdrop-blur-md shadow-2xl">

                    <!-- Sojiro Ava -->
                    <div class="absolute -top-20 left-10 transition-transform duration-300 hover:scale-110">
                        <img src="{{ asset('assets/images/sojiro.png') }}" class="w-32 h-32 object-contain"
                            alt="Sojiro Sakura">
                    </div>

                    <div class="flex flex-col md:flex-row items-start gap-4 relative z-10">
                        <!-- Name Tag -->
                        <div
                            class="bg-p5-red text-white px-4 py-1 font-heading uppercase italic font-bold text-sm tracking-widest shadow-p5">
                            Sojiro Sakura
                        </div>

                        <!-- Dialogue -->
                        <div class="text-p5-white text-xl md:text-2xl font-body italic leading-relaxed">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit."
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</x-layout>
