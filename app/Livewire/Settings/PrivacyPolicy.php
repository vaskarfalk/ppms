<?php

namespace App\Livewire\Settings;

use App\Models\Seo\SeoPages;
use App\Models\Settings\PrivacyPolicy as SettingsPrivacyPolicy;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    public $privacy;
    public $seopages;
    public function mount()
    {
        $this->privacy = SettingsPrivacyPolicy::firstOrFail();
        $this->seopages = SeoPages::firstOrFail();
    }
    public function render()
    {
        return view('livewire.settings.privacy-policy');
    }
}
