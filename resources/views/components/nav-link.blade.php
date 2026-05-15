    <a {{ $attributes }}
        class="{{ $active ? 'text-p5-red border-b-4 border-p5-red font-black' : 'text-p5-grey hover:text-white border-b-4 border-transparent' }} font-body transition-all duration-300 px-4 py-2">
        {{ $slot }}
    </a>
