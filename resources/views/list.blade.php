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
        </div>
    </x-layout>
