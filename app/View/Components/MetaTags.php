<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaTags extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public string $description;
    public string $ogTitle;
    public string $ogDescription;
    public string $ogUrl;
    public string $canonical;
    
    public function __construct(
        string $title = 'Default Title',
        string $description = 'Default meta description',
        string $ogTitle = 'Default OG Title',
        string $ogDescription = 'Default OG Description',
        string $ogUrl = '',
        string $canonical = ''
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->ogTitle = $ogTitle;
        $this->ogDescription = $ogDescription;
        $this->ogUrl = $ogUrl ?: url()->current();
        $this->canonical = $canonical ?: url()->current();
     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-tags');
    }
}
