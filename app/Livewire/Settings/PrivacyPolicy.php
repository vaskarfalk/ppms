<?php

namespace App\Livewire\Settings;

use App\Models\Settings\PrivacyPolicy as SettingsPrivacyPolicy;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    public $privacy;
    public function mount()
    {
        $this->privacy = SettingsPrivacyPolicy::firstOrFail();
    }
    public function render()
    {
        return view('livewire.settings.privacy-policy');
    }
}
