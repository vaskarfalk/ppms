<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetail extends Component
{

    public $service;

    public function mount($service)
    {
        $this->service = Service::where('slug', $service)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.service-detail');
    }
}
