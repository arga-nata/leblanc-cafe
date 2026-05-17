    <x-layout>
        <x-slot:judul>
            The Regulars
        </x-slot:judul>

        <div class="relative min-h-screen flex flex-col py-24">

            {{-- Leblanc Background --}}
            <div class="fixed inset-0 z-0">
                <img src="{{ asset('assets/images/coba.gif') }}" class="w-full h-full object-cover"
                    alt="Leblanc Background">
            </div>

            {{-- Brightness 60 --}}
            <div class="fixed inset-0 z-10 bg-p5-black/60"></div>

            <div class="relative z-20 container mx-auto px-10">

                <div class="flex flex-col gap-5 max-w-4xl mx-auto">

                    @foreach ($list as $person)
                        {{-- Card --}}
                        <div
                            class="bg-p5-black/60 border-l-4 border-p5-red p-5 shadow-xl hover:scale-110 transition-all duration-300 cursor-pointer">

                            <div class="flex flex-col md:flex-row gap-6 items-start">

                                {{-- Image --}}
                                <div>
                                    <img src="{{ asset('assets/images/' . $person['image']) }}"
                                        class="w-32 h-32 object-cover border-2 border-p5-red shadow-lg"
                                        alt="{{ $person['name'] }}" loading="lazy">
                                </div>

                                {{-- Detail --}}
                                <div class="flex flex-col">
                                    <h2 class="font-heading text-white text-2xl uppercase">
                                        {{ $person['name'] }}
                                    </h2>

                                    <p class="text-p5-red font-bold text-xl mt-1 uppercase tracking-widest">
                                        {{ $person['status'] }}
                                    </p>

                                    <p class="font-body text-p5-grey text-sm mt-2 leading-relaxed italic">
                                        "{{ $person['habit'] }}"
                                    </p>

                                    <p class="text-p5-white/30 text-[10px] mt-3 uppercase tracking-tighter font-bold">
                                        {{ $person['role'] }}
                                    </p>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </x-layout>
