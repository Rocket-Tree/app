<?php

namespace App\View\Components\Layout\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarLink extends Component
{
    public $classNames;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $text, public bool $active)
    {
        $this->classNames = $this->active ? 'inline-block py-2 px-4 text-[#65320b] font-bold no-underline' :
        'inline-block text-[#65320b] no-underline hover:text-[#1ca538] hover:text-underline py-2 px-4';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header.navbar-link');
    }
}
