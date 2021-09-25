<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        // $posts = Post::latest()->paginate(5);
        return view('livewire.index', [
            'posts' => Post::latest()->paginate(4),
            'limit_posts' => Post::latest()->take(5)->get(),
        ]);
    }
}
