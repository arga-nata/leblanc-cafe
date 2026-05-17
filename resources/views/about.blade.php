<x-layout>
    <x-slot:judul>
        About the Café
    </x-slot:judul>

    <div class="relative min-h-screen flex flex-col py-24">

        {{-- Leblanc Background --}}
        <div class="fixed inset-0 z-0">
            <img src="{{ asset('assets/images/coba.gif') }}" class="w-full h-full object-cover" alt="Leblanc Background">
        </div>

        {{-- Brightness 60 --}}
        <div class="fixed inset-0 z-10 bg-p5-black/60"></div>

        <div class="relative z-20 container mx-auto px-10">

            {{-- Card --}}
            <div class="max-w-2xl mx-auto bg-p5-black/60 border-l-8 border-p5-red p-8 shadow-2xl">
                @foreach ($sojiro as $s)
                    {{-- Image Mid --}}
                    <div class="flex justify-center mb-2">
                        <img src="{{ asset('assets/images/leblanc-front.png') }}" class="w-64 h-64 object-cover"
                            alt="Café Leblanc Front">
                    </div>
                    <div class="space-y-5 text-p5-white font-body">

                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Owner</span>
                            <span class="text-lg">{{ $s['owner'] }}</span>
                        </div>

                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Location</span>
                            <span class="text-lg">{{ $s['location'] }}</span>
                        </div>

                        <div class="flex items-center gap-3 border-b border-p5-dark-red pb-2">
                            <span class="text-p5-red font-bold uppercase text-xs tracking-widest">Specialty</span>
                            <span class="text-lg">{{ $s['specialty'] }}</span>
                        </div>

                        <div class="pt-5">
                            <span
                                class="text-p5-red font-bold uppercase text-xs tracking-widest block mb-2">Story</span>
                            <span class="text-p5-grey leading-relaxed">
                                "{{ $s['description'] }}"
                            </span>
                        </div>

                    </div>
                @endforeach

                {{-- My Profile --}}
                <div class="mt-10 pt-6 border-t border-p5-dark-red">
                    <div class="flex flex-col gap-1">
                        <span class="text-p5-red font-bold uppercase text-[10px] tracking-widest opacity-70">Developed
                            by</span>
                        <div class="text-sm font-body text-p5-grey">
                            <span class="text-p5-white font-bold">{{ $student['nama'] }}</span>
                            <span class="mx-2 text-p5-dark-red">•</span>
                            {{ $student['nim'] }}
                        </div>
                        <div class="text-[11px] text-p5-grey/60">
                            {{ $student['prodi'] }} | {{ $student['matakuliah'] }} | {{ $student['framework'] }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
