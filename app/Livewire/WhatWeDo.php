<?php

namespace App\Livewire;

use App\Models\Settings\PageHeading;
use App\Models\WhatWeDo as ModelsWhatWeDo;
use Livewire\Component;

class WhatWeDo extends Component
{
    public $whatdos;
    public $pageHeading;
    public function mount(){

        $this->pageHeading = PageHeading::firstOrFail();
        $this->whatdos= ModelsWhatWeDo::all();

    }
    public function render()
    {
        return view('livewire.what-we-do');
    }
}
