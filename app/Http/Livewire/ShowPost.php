<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $postId;
    public $limit_post;
    public $comments;
    public $comment;
    public $coment_name;
    public $post;
    // public $posts;
    public $post_id = '';

    protected $rules = [
        'post_id' => 'required',
        'comment' => 'required',
    ];

    public function mount($id)
    {
        $this->limit_post = Post::latest()->take(5)->get();
        $this->post = Post::find($id);
        $this->comments = Comment::where('post_id', $id)->latest()->get();
        $post = Post::find($id);
        $this->post_id = $post->id;
    }


    public function render()
    {
        return view('livewire.show-post')
            ->extends('layouts.base')
            ->section('container');
    }

    //untuk save comment

    public function savecomment()
    {
        if ($this->coment_name == '') {
            $this->coment_name = 'Anonim';
        }
        Comment::create([
            'post_id' => $this->post_id,
            'coment_name' => $this->coment_name,
            'comment' => $this->comment,
        ]);
        $id = $this->post_id;
        $this->coment_name = '';
        $this->comment = '';
        //   $this->emit('postCreated');
        return redirect()->to("/$id");
    }
}
