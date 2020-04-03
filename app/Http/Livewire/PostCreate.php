<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $body;

    public function addPost()
    {
        dd('working');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
