<?php

namespace App\Livewire\Partials;


use App\Models\Settings\PageHeading;
use Livewire\Component;

class Header extends Component
{
    public $pageHeading;
   

    public function mount()
    {
       
        $this->pageHeading = PageHeading::firstOrFail();
    }
    public function render()
    {
        return view('livewire.partials.header');
    }
}
