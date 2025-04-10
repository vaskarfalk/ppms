<?php

namespace App\Livewire\Settings;

use App\Models\Settings\TermsAndConditions as SettingsTermsAndConditions;
use Livewire\Component;

class TermsAndConditions extends Component
{
    public $terms;
    public function mount()
    {
        $this->terms = SettingsTermsAndConditions::firstOrFail();
    }

    public function render()
    {
        return view('livewire.settings.terms-and-conditions');
    }
}
