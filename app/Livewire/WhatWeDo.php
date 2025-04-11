<?php

namespace App\Livewire;

use App\Models\Seo\SeoPages;
use App\Models\Settings\PageHeading;
use App\Models\WhatWeDo as ModelsWhatWeDo;
use Livewire\Component;

class WhatWeDo extends Component
{
    public $whatdos;
    public $pageHeading;
    public $seopages;
    public function mount(){

        $this->pageHeading = PageHeading::firstOrFail();
        $this->whatdos= ModelsWhatWeDo::all();
        $this->seopages = SeoPages::firstOrFail();

    }
    public function render()
    {
        return view('livewire.what-we-do');
    }
}
