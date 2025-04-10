<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class News extends Component
{

    public $news;

    public $pageHeading;


    public function mount()
    {
        $this->pageHeading = PageHeading::firstOrFail();
        $this->news = Post::where('is_active', 1)->get();
    }



    public function render()
    {
        return view('livewire.news');
    }
}
