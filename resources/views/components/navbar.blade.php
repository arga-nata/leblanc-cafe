<nav class="bg-p5-black border-b-2 border-p5-red">
    <div class="mx-auto flex items-center py-3 px-4 justify-between">
        <div class="flex items-center">
            <a href="/home" class="flex items-center gap-3">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Café Leblanc Logo"
                    class="h-15 w-auto object-contain">
                <span class="text-p5-white uppercase tracking-tight font-heading text-xl">
                    Café Leblanc
                </span>
            </a>
        </div>
        <div class="flex gap-6">
            <x-nav-link href="/home" :active="request()->is('home')">
                Home
            </x-nav-link>
            <x-nav-link href="/list" :active="request()->is('list')">List</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">
                About
            </x-nav-link>
        </div>
    </div>
</nav>
