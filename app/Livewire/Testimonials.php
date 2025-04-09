<?php

namespace App\Livewire;

use App\Models\Settings\PageHeading;
use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials;
    public $pageHeading;

    public function mount()
    {
        $this->pageHeading = PageHeading::firstOrFail();
        $this->testimonials = Testimonial::where('is_active', 1)->get();
    }
    public function render()
    {
        return view('livewire.testimonials');
    }
}
