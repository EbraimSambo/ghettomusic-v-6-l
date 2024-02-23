<?php

namespace App\Livewire\Pages\Music\Store;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreateMusicPage extends Component
{
    #[Title('Criar Música')]
    public function render()
    {
        return view('livewire.pages.music.store.create-music-page')->layout('layouts.applayout');
    }
}
