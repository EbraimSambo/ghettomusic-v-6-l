<form wire:submit="save" id="form-store">
    <div class="input-group">
        <div class="input">
            <x-app.global.form.label :value="__('Título')" />
            <x-app.global.form.input wire:model="form.title" type="text" placeholder="Titulo" />
            <x-app.global.form.input-error :error="__('form.title')" />
        </div>
        <div class="input">
            <x-app.global.form.label :value="__('Artista')" />
            <x-app.global.form.input wire:model="form.artist" type="text" placeholder="Artista" />
            <x-app.global.form.input-error :error="__('form.artist')" />
        </div>
        <div class="input">
            <x-app.global.form.label :value="__('Descrição')" />
            <x-app.global.form.text-area wire:model="form.description" />
            <x-app.global.form.input-error :error="__('form.description')" />
        </div>
        <div class="input file">
            <label for="cover_path">
                <span>clicar ou soltar uma imagem</span>
            </label>
            <x-app.global.form.input wire:model="form.cover_path" type="file" id="cover_path" />
            <x-app.global.form.input-error :error="__('form.cover_path')" />
        </div>
        <div class="input file">
            <label for="audio_path">
                <span>clicar ou soltar audio</span>
            </label>
            <x-app.global.form.input wire:model="form.audio_path" type="file" id="audio_path" />
            <x-app.global.form.input-error :error="__('form.audio_path')" />
        </div>
        <div class="input">
            <x-app.global.form.label :value="__('Escolha um género')" />
            <select wire:model="form.category" id="category">
                <option value="null">Escolher Categória</option>
                @foreach (\App\Enums\GenereTypes::cases() as $category)
                    <option value="{{ $category->value }}"> {{ $category->value }} </option>
                @endforeach
            </select>
            <x-app.global.form.input-error :error="__('form.category')" />
        </div>
        <div class="input button">
            <button wire:click="save" class="btn-form">Criar Uma Música</button>
        </div>
    </div>
</form>
