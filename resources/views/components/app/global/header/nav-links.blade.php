<ul>
    <li>
        <a href="{{ route('home') }}" wire:navigate>
            <x-app.icons.home-icon />
            <span class="mobile-none">Home</span>
        </a>
    </li>
    <li class="mobile-none">
        <a href="{{ route('home') }}" wire:navigate>
            <x-app.icons.disc-fill-icon />  
            <span >Músicas</span>
        </a>
    </li>
    <li class="mobile-none">
        <a href="{{ route('home') }}"  wire:navigate>
            <x-app.icons.list-music-icon />
            <span>Estílos</span>
        </a>
    </li>
    <li>
        {{-- Search algin-item: flex-start --}}
        <a href="{{ route('home') }}" class="search-btn" wire:navigate>
            <x-app.icons.search-icon />
        </a>
    </li>
    <x-app.global.menubtn />
</ul>
