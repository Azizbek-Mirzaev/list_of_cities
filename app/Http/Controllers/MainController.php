<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(Request $request)
    {
        $selectedCity = $request->session()->get('selected_city');
        return view('about', compact('selectedCity'));
    }

    public function news(Request $request)
    {
        $selectedCity = $request->session()->get('selected_city');
        return view('news', compact('selectedCity'));
    }

}
