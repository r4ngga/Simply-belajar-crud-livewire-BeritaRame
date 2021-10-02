<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

// use

class ListPost extends Component
{
    use WithPagination;
    public $updateStateId = 0;
    public $title = 0;
    public $content = 0;
    public $category = 0;
    protected $listeners = [
        'postCreated' => '$refresh'
    ];
    public function render()
    {
        return view('livewire.list-post', [
            'posts' => Post::where('user_id', Auth::id())->latest()->paginate(5)
        ]);
    }

    public function showUpdateForm($postId)
    {
        // $this->updateStateId = $post;
        $post = Post::find($postId);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->category = $post->category;
        $this->updateStateId = $postId;
    }

    public function updatePost($postId)
    {
        $post = Post::find($postId);
        $post->title = $this->title;
        $post->content = $this->content;
        $post->category = $this->category;
        $post->save();

        $this->updateStateId = 0;
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);
        $post->delete();
    }
}
