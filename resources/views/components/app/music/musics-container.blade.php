@props(['datas','compare'])
<ul class="music-container">
    @isset($compare)
        @foreach ($datas as $data)
            @if ($compare != $data->title)
                <x-app.music.music-card :data="$data" />
            @endif
        @endforeach
    @else
        @foreach ($datas as $data)
            <x-app.music.music-card :data="$data" />          
        @endforeach
    @endisset
</ul>