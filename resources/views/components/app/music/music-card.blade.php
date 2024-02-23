@props(['data'])

<li class="card">
    <a href="{{route('music.show', $data->slug)}}" wire:navigate>
        <article>
            <picture class="cover">
                <img src="{{ asset('storage/' . $data->cover_path) }}" alt="{{ $data->title }}">
            </picture>
            <div class="legend">
                <h3>{{ Str::words($data->title, 3) }}</h3>

                <h4>{{ Str::words($data->artist, 3) }}</h4>
            </div>
            <p class="counter">
                @if (!$data->download == 0)
                    <span>{{ $data->download }}</span>
                    <span>downloads</span>
                @endif
            </p>
        </article>
    </a>
</li>
