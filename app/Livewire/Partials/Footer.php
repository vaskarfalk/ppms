<?php

namespace App\Livewire\Partials;

use App\Models\Service;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class Footer extends Component
{

    public $services;  
    public $pageHeading;

    public function mount()
    {

        $this->pageHeading = PageHeading::firstOrFail();
        $this->services = Service::where('is_active', 1)->get();
    }
    public function render()
    {
        return view('livewire.partials.footer');
    }
}
