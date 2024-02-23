<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Component;

class ShowMusicPage extends Component
{
    public $music;
    public function mount(Music $music, $slug)
    {
        $this->music = $music->where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.pages.music.show-music-page')
        ->layout('layouts.applayout', ['title'=>'Ouvir ou baixar ' .$this->music->title]);
    }
}
