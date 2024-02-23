<?php

namespace App\Livewire\Pages;

use App\Models\Music;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Home')]
    public function render(Music $music)
    {
        return view('livewire.pages.home-page',[
            'news'=> $music->orderBy('id','desc')->paginate(8),
            'recomended' => $music->inRandomOrder()->take(8)->get(),
            'tops' => $music->where('download', '>', 0)->orderByDesc('download')->take(8)->get()
        ])->layout('layouts.applayout');
    }
}
