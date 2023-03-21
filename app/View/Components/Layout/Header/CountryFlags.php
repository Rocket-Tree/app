<?php

namespace App\View\Components\Layout\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CountryFlags extends Component
{
    public string $current;

    /**
     * @var string[] $langs
     */
    public array $langs = ['es' => 'es', 'en' => 'us', 'cn' => 'cn'];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->current = $this->getLang();
    }

    private function getLang(): string
    {
        $lang  = session()->get('flag', 'es');
        if (!is_string($lang)){
            throw new \Exception("The flag must be a string");
        }

        return $lang;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header.country-flags');
    }
}
