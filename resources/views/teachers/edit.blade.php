@extends('layouts.app')
@section('title', 'Редагувати викладача')
@section('content')
    <div style="max-width: 650px; margin: 0 auto;">
        <h1 style="margin-bottom: 20px; color: #0b1f3a;">Редагувати викладача</h1>
        <form method="POST" action="{{ route('teachers.update', $teacher) }}" style="background: #ffffff; padding: 25px; border: 2px solid #0b1f3a;">
            @csrf
            @method('PUT')
            @include('teachers._form')
            <button type="submit" style="background: #0b1f3a; color: #ffffff; border: none; padding: 10px 18px; font-weight: bold; cursor: pointer;">
                Оновити дані
            </button>
        </form>
        <p style="margin-top: 15px;">
            <a href="{{ route('teachers.index') }}" style="color: #0b1f3a;">← Повернутися до списку</a>
        </p>
    </div>
@endsection
