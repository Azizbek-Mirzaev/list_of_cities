@extends('layouts.app')

@section('content')
    <h1>О нас</h1>
    <p>Информация о компании в городе {{ $selectedCity }}.</p>


<br>
    <!-- Кнопка для сброса города -->
    <form action="{{ route('reset.city') }}" method="get">
        <button type="submit">Сбросить город</button>
    </form>

@endsection
