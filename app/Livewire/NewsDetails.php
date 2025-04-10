<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class NewsDetails extends Component
{
    public $news;
    public $latestnews;

  
    public function mount($news)
    {
    $this->news = Post::where('slug', $news)->firstOrFail();
    $this->latestnews = Post::where('is_active', 1) ->latest()->take(3)->get();


    }
    public function render()
    {
        
        return view('livewire.news-details');
    }
}
