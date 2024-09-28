<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        // Получаем города из базы данных
        $cities = City::all();

        // Получаем выбранный город из сессии
        $selectedCity = $request->session()->get('selected_city');

        return view('index', compact('cities', 'selectedCity'));
    }

    public function selectCity($cityName, Request $request)
    {
        $city = City::where('name', $cityName)->firstOrFail();

        $request->session()->put('selected_city', $city->name);

        // Перенаправляем на переданный предыдущий URL, если он есть
    $previousUrl = $request->input('previous_url', route('index')); // Если не передан предыдущий URL, перенаправляем на индекс

        return redirect($previousUrl);//redirect()->route('index');
    }

       // Метод для сброса выбранного города
       public function resetCity(Request $request)
       {
           // Удаляем выбранный город из сессии
           $request->session()->forget('selected_city');

           // Перенаправляем на главную страницу
           return redirect()->route('index');
       }
}
