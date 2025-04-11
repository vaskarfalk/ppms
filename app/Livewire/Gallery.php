<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use App\Models\Seo\SeoPages;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class Gallery extends Component
{
    public $pageHeading;
    public $galleries;
    public $seopages;
    public function mount()
    {

        $this->galleries= ModelsGallery::all();
        $this->pageHeading = PageHeading::firstOrFail();
        $this->seopages = SeoPages::firstOrFail();

    }
    public function render()
    {
        return view('livewire.gallery');
    }
}
