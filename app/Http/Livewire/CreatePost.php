<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $content;
    public $title;
    public $category;
    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        Post::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category
        ]);
        $this->title = "";
        $this->content = "";
        $this->emit('postCreated');
    }
}
