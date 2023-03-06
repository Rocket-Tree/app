<?php

namespace App\View\Components\Layout\Header;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;

class CountryFlags extends Component
{
    public string $current;
    public array  $langs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->current = session()->has('flag') ? session()->get('flag') : 'es';
        $this->langs = ['es' => 'es', 'en' => 'us', 'cn' => 'cn'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header.country-flags');
    }
}
