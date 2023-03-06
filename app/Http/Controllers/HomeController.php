<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function lang(string $lang)
    {
        if(in_array($lang, config('app.supported_locales'))){
            app()->setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
