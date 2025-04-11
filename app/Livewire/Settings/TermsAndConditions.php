<?php

namespace App\Livewire\Settings;

use App\Models\Seo\SeoPages;
use App\Models\Settings\TermsAndConditions as SettingsTermsAndConditions;
use Livewire\Component;

class TermsAndConditions extends Component
{
    public $terms;
    public $seopages;
    public function mount()
    {
        $this->terms = SettingsTermsAndConditions::firstOrFail();
        $this->seopages = SeoPages::firstOrFail();
    }

    public function render()
    {
        return view('livewire.settings.terms-and-conditions');
    }
}
