<?php

namespace App\Livewire\Components\Music;

use App\Livewire\Forms\MusicForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public MusicForm $form;

    public function save() {

        $this->validate();

        $this->form->createMusic();

        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.components.music.form');
    }
}
