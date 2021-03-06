<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    protected $listeners = [
        'postAdded'
    ];

    public function postAdded()
    {
        session()->flash('message', 'post added');
    }

    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
