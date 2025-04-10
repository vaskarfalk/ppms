<?php

namespace App\Livewire;

use App\Models\Settings\FeaturesSection;
use App\Models\Settings\PageHeading;
use Livewire\Attributes\Title;
use Livewire\Component;

class AboutUs extends Component
{

    public $pageHeading;
    public $featuresSections;



    public function mount()
    {
        $this->featuresSections = FeaturesSection::all();
        $this->pageHeading = PageHeading::firstOrFail();
    }
    public function render()
    {
        return view('livewire.about-us');
    }
}
