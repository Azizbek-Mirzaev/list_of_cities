@extends('layouts.app')

@section('content')
    <h1>Новости</h1>
    <p>Последние новости в городе {{ $selectedCity }}.</p>


<br>
        <!-- Кнопка для сброса города -->
        <form action="{{ route('reset.city') }}" method="get">
            <button type="submit">Сбросить город</button>
        </form>
@endsection

