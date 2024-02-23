<?php

namespace App\Livewire\Components\Music;

use Livewire\Component;

class ShowMusic extends Component
{
    public  $data;
    public function mount($data)
    {
       $this->data = $data;
    }
    public function render()
    {
        return view('livewire.components.music.show-music');
    }
}
