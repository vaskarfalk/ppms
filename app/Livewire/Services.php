<?php

namespace App\Livewire;

use App\Models\Seo\SeoPages;
use App\Models\Service;
use App\Models\Settings\PageHeading;
use Livewire\Component;

class Services extends Component
{
    public $pageHeading;
    public $services;
    public $seopages;
    public function mount()
    {
        $this->services = Service::where('is_active', 1)->get();
        $this->pageHeading = PageHeading::firstOrFail();
        $this->seopages = SeoPages::firstOrFail();
    }


    public function render()
    {
        return view('livewire.services');
    }
}
