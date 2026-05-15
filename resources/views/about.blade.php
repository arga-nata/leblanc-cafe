<x-layout>
    <x-slot:judul>
        About the Café
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24 overflow-hidden">

        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/leblanc-bg.jpg') }}" class="w-full h-full object-cover"
                alt="Leblanc Background">
        </div>

        <div class="fixed inset-0 z-10 bg-p5-black/70"></div>

        <div class="relative z-20 container mx-auto px-4">
            <div class="max-w-2xl mx-auto bg-p5-black/60 border-l-8 border-p5-red p-8 shadow-2xl backdrop-blur-md">

                @foreach ($arrayName as $info)
                    <h2 class="text-p5-red text-4xl font-heading uppercase italic font-black mb-6 tracking-tighter">
                        {{ $info['name'] }}
                    </h2>

                    <div class="space-y-4 text-p5-white font-body">
                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Owner</span>
                            <span class="text-lg italic">{{ $info['owner'] }}</span>
                        </div>

                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Location</span>
                            <span class="text-lg italic">{{ $info['location'] }}</span>
                        </div>

                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Specialty</span>
                            <span class="text-lg italic">{{ $info['specialty'] }}</span>
                        </div>

                        <div class="pt-4">
                            <span
                                class="text-p5-red font-bold uppercase text-xs tracking-widest block mb-2">Story</span>
                            <p class="text-p5-grey leading-relaxed italic">
                                "{{ $info['description'] }}"
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-layout>
