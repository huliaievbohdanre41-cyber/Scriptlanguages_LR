@extends('layouts.app')
@section('title', $teacher->full_name)
@section('content')
    <div style="max-width: 650px; margin: 0 auto; background: #ffffff; padding: 25px; border: 2px solid #0b1f3a;">
        <h1 style="margin-top: 0; color: #0b1f3a;">{{ $teacher->full_name }}</h1>
        <p><strong>Кафедра:</strong> {{ $teacher->department }}</p>
        <p><strong>Вчене звання / посада:</strong> {{ $teacher->academic_title }}</p>
        <p><strong>Email:</strong> {{ $teacher->email }}</p>
        <p><strong>Стаж викладання:</strong> {{ $teacher->experience_years }} р.</p>
        <div style="display: flex; gap: 15px; align-items: center; margin-top: 25px; flex-wrap: wrap;">
            <a href="{{ route('teachers.edit', $teacher) }}" style="background: #0b1f3a; color: #ffffff; padding: 9px 16px; text-decoration: none; font-weight: bold;">
                Редагувати
            </a>
            <form method="POST" action="{{ route('teachers.destroy', $teacher) }}" onsubmit="return confirm('Видалити запис про викладача?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: #d9534f; color: #ffffff; border: none; padding: 9px 16px; font-weight: bold; cursor: pointer;">
                    Видалити
                </button>
            </form>
            <a href="{{ route('teachers.index') }}" style="color: #0b1f3a; font-weight: bold;">
                ← До списку
            </a>
        </div>
    </div>
@endsection
