<?php

namespace App\Livewire\Partials;

use App\Models\Service;
use Livewire\Component;

class Footer extends Component
{

    public $services;

    public function mount()
    {
        $this->services = Service::where('is_active', 1)->get();
    }
    public function render()
    {
        return view('livewire.partials.footer');
    }
}
