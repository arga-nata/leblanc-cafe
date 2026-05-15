<a {{ $attributes }}
    class="{{ $active ? 'bg-p5-red text-p5-white rounded-sm' : 'text-p5-grey hover:text-white' }} font-body transition-all duration-300 px-4 py-1">
    {{ $slot }}
</a>
