@extends('layouts.app')
@section('title', 'Інформація студентам')
@section('content')
    <h1>Студентам</h1>
    <a href="{{ route('programs.index') }}" style="display: inline-block; background: #0b1f3a; color: #ffffff; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: bold;">
        Навчальні програми
    </a>
    <p>
        Тут буде додано інформація яка потрібна для студентів.
    </p>
@endsection
