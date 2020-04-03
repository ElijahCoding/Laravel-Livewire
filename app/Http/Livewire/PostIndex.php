<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class PostIndex extends Component
{
    protected $listeners = [
        'postAdded'
    ];

    public function postAdded()
    {
        
    }

    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Post::latest()->get()
        ]);
    }
}
