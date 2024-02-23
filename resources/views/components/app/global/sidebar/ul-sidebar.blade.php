<ul>
    <li class="desible">Menu</li>
    <li>
        <a href="{{ route('home') }}" wire:navigate>
            <x-app.icons.playlists-icon />
            <span>PlayLists</span>
        </a>
    </li>
    <li>
        <a href="{{ route('home') }}" wire:navigate>
            <x-app.icons.microphone-icon />
            <span>Artists</span>
        </a>
    </li>
    <li>
        <a href="{{ route('home') }}" wire:navigate>
            <x-app.icons.add-icon />
            <span>Publicar Música</span>
        </a>
    </li>
</ul>