<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class Gallery extends Component
{
    public $pageHeading;
    public $gallery;
    public function mount()
    {

        $this->gallery= ModelsGallery::all();
        $this->pageHeading = PageHeading::firstOrFail();
      

    }
    public function render()
    {
        return view('livewire.gallery');
    }
}
