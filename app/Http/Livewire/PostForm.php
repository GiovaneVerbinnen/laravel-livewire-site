<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostForm extends Component
{

    public $title;
    public $content;

    public function hydrate()
    {
        $this->validate([
            'title' => 'required|min:10|max:120',
            'content' => 'required|min:10|max:120',
        ]);
    }

    public function save()
    {
        $data = [
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ];

        Post::create($data);
        $this->emit('refreshparent');
        $this->dispatchBrowserEvent('closeModal');
        $this->clear();
    }

    private function clear()
    {
        $this->title = null;
        $this->content = null;
    }
    public function render()
    {
        return view('livewire.post-form');
    }
}
