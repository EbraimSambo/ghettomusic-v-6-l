<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class MusicForm extends Form
{
    #[Validate('required|string')]
    public $title;
    #[Validate('required|string')]
    public $description;
    #[Validate('required|string')]
    public $category;
    #[Validate('required|string')]
    public $artist;
    #[Validate('required')]
    public $cover_path;
    #[Validate('required')]
    public $audio_path;
    
    // public function rules()
    // {

    //     return [
    //         'description' => 'required|min:3',
    //         'category' => 'required',
    //         'artist' => 'required',
    //         'cover_path' => 'required',
    //         'audio_path' => 'required',
    //     ];
    // }

    public function upload(){

    }
    public function createMusic(){

        if (!is_null($this->cover_path) && !is_null($this->audio_path)) {
            $nameCover = $this->cover_path->hashName();
            $nameAudio = $this->audio_path->hashName();
            $this->cover_path = $this->cover_path->storeAs('images', $nameCover, 'public');
            $this->audio_path = $this->audio_path->storeAs('audios', $nameAudio, 'public');
        }
        
        auth()->user()->music()->create($this->all());
        // session()->flush('success', __('Criado com Sucesso'));
        request()->session()->flash('sucess', 'Bilhete criado com sucess.');
    }
}
