<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowByCategory extends Component
{
    use WithPagination;
    public $category;
    public $limit_post;
    public $posts;
    public $post;
    // public $title;

    public function mount($category)
    {
        $this->limit_post = Post::latest()->take(5)->get();
        $this->post = Post::where('category', $category)->get();
        // $posts = Post::where('category', $category)->latest()->paginate(4);
        // $this->post = Post::all();
    }

    public function render()
    {
        return view('livewire.show-by-category')->extends('layouts.base')
            ->section('container');
    }
}
