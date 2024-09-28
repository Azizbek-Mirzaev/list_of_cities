@extends('layouts.app')

@section('content')
<a href="{{ url(session('selected_city') . '/about') }}">О нас</a>
<a href="{{ url(session('selected_city') . '/news') }}">Новости</a>
<a href="{{ route('reset.city')  }}">Сбросить данные</a>

    <h1>Выберите город:</h1>
    <ul>
        @foreach($cities as $city)
            <li>
                <a href="{{ route('select.city', $city->name) }}"
                   style="{{ $selectedCity == $city->name ? 'font-weight: bold;' : '' }}">
                   {{ $city->name }}
                </a>
                <form id="select-city-{{ $city->id }}" action="{{ route('select.city', $city->name) }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" name="previous_url" value="{{ url()->full() }}">
                </form>
            </li>
        @endforeach
    </ul>



@endsection
