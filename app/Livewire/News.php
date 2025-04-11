<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use App\Models\Seo\SeoPages;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class News extends Component
{

    public $news;
    public $seopages;
    public $pageHeading;


    public function mount()
    {
        $this->pageHeading = PageHeading::firstOrFail();
        $this->news = Post::where('is_active', 1)->get();
        $this->seopages = SeoPages::firstOrFail();
    }



    public function render()
    {
        return view('livewire.news');
    }
}
