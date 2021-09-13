<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    protected $listeners = [
        'refreshParent' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::where('user_id', '=', auth()->user()->id)->paginate(2)
        ]);
    }
}
