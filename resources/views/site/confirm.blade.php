@extends('layouts.app')
@section('title', 'Підтвердження звернення — Університет')
@section('content')
    <div style="max-width: 650px; margin: 0 auto; text-align: left;">
        <h1 style="text-align: center; margin-bottom: 10px;">
            Дякуємо! Звернення прийнято
        </h1>
        <div style="text-align: left; margin: 20px 0;">
            <p><strong>Відправник:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            @if(!empty($phone))
                <p><strong>Телефон:</strong> {{ $phone }}</p>
            @endif
            <p><strong>Повідомлення:</strong> {{ $message }}</p>
        </div>

        <a href="{{ url('/') }}">
            ← На головну
        </a>
    </div>
@endsection
