<?php

namespace App\View\Components\Layout\Header;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class NavbarLinks extends Component
{
    public array $links;
    public string $active;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->links = [
            'home' => route('home'),
            'about' => '#',
            'contact' => '#'
        ];
        $this->active = route(Route::currentRouteName());
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header.navbar-links');
    }
}
