<?php

namespace App\Livewire;

use App\Models\WhatWeDo as ModelsWhatWeDo;
use Livewire\Component;

class WhatWeDo extends Component
{
    public $whatdos;
    public function mount(){

        $this->whatdos= ModelsWhatWeDo::all();

    }
    public function render()
    {
        return view('livewire.what-we-do');
    }
}
