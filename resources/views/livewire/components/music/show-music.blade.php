<div x-data="player" id="container-show">
    <div class="cover">
        <img src="{{ asset('storage/' . $data->cover_path) }}" alt="{{ $data->title }}">
        <button  x-show="!playing" x-on:click="play()" class="play-btn">
            <x-app.icons.play-icon />
        </button>

        <button x-show="playing" x-on:click="pause()" class="play-btn">
            <x-app.icons.pause-icon />
        </button>
    </div>
    <div class="desc">
        <div class="legend">
            <h1>{{ $data->title }}</h1>
            <h2>{{ $data->artist }}</h2>
            <p x-text="duraction"></p>
        </div>
        <input type="range" min="0" max="duraction" x-model="currentTime" @input="seek()">
        <audio controls x-ref="audio" src="{{ asset('storage/' . $data->audio_path) }}"></audio>
        <div class="container-button">
            <button class="btn">
                Baixar Música
            </button>
        </div>
    </div>
</div>
