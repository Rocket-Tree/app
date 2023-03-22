<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View
    {
        return view('home');
    }

    public function lang(string $lang): RedirectResponse
    {
        if (in_array($lang, $this->getLocales())) {
            app()->setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }

    /**
     * @return string[]
     */
    private function getLocales(): array
    {
        $locales = config('app.supported_locales');

        return is_array($locales) ? $locales : [$locales];
    }
}
