<?php

namespace App\View\Components\Layout\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class NavbarLinks extends Component
{
    /** @var string[] */
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
            'contact' => '#',
        ];
        $this->active = Route::currentRouteName() ? route(Route::currentRouteName()) : route('home');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header.navbar-links');
    }
}
