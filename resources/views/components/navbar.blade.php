<nav class="bg-p5-black border-b-4 border-p5-red">
    <div class="mx-auto flex items-center h-16 px-4 justify-between">
        <div class="text-p5-white">
            <p class="uppercase tracking-tight font-logo">Leblanc Cafe</p>
        </div>
        <div class="flex gap-6">
            <x-nav-link href="/home" :active="request()->is('home')">
                Home
            </x-nav-link>
            <x-nav-link href="/archives" :active="request()->is('archives')">
                Archives
            </x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">
                About
            </x-nav-link>
        </div>
    </div>
</nav>
