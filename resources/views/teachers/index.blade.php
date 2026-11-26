@extends('layouts.app')
@section('title', 'Викладачі')
@section('content')
    <div style="max-width: 960px; margin: 0 auto;">
        <h1 style="margin-bottom: 20px; color: #0b1f3a;">Викладачі</h1>
        <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; gap: 15px; flex-wrap: wrap;">
            <a href="{{ route('teachers.create') }}" style="background: #0b1f3a; color: #ffffff; padding: 10px 16px; text-decoration: none; font-weight: bold; border-radius: 2px;">
                + Додати викладача
            </a>
            <form method="GET" action="{{ route('teachers.index') }}" style="display: flex; gap: 8px; align-items: center; flex-wrap: wrap;">
                <label for="department" style="font-weight: bold;">Кафедра:</label>
                <select id="department" name="department" style="padding: 8px; border: 1px solid #000000; background: #ffffff;">
                    <option value="">Усі кафедри</option>
                    @foreach($departments as $department)
                        <option value="{{ $department }}" {{ request('department') === $department ? 'selected' : '' }}>
                            {{ $department }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" style="background: #0b1f3a; color: #ffffff; border: none; padding: 8px 14px; font-weight: bold; cursor: pointer;">
                    Фільтрувати
                </button>
            </form>
        </div>
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; margin-bottom: 20px;">
            <thead>
            <tr style="background: #0b1f3a; color: #ffffff; text-align: left;"><th style="padding: 10px; border: 1px solid #000000;">#</th><th style="padding: 10px; border: 1px solid #000000;">ПІБ</th><th style="padding: 10px; border: 1px solid #000000;">Кафедра</th><th style="padding: 10px; border: 1px solid #000000;">Посада / звання</th><th style="padding: 10px; border: 1px solid #000000;">Стаж</th><th style="padding: 10px; border: 1px solid #000000;">Дії</th></tr>
            </thead>
            <tbody>
            @forelse($teachers as $i => $teacher)
                <tr>
                    <td style="padding: 10px; border: 1px solid #000000;">{{ $teachers->firstItem() + $i }}</td><td style="padding: 10px; border: 1px solid #000000;">
                        <a href="{{ route('teachers.show', $teacher) }}" style="color: #0b1f3a; font-weight: bold;">{{ $teacher->full_name }}</a></td>
                    <td style="padding: 10px; border: 1px solid #000000;">{{ $teacher->department }}</td>
                    <td style="padding: 10px; border: 1px solid #000000;">{{ $teacher->academic_title }}</td>
                    <td style="padding: 10px; border: 1px solid #000000;">{{ $teacher->experience_years }} р.</td>
                    <td style="padding: 10px; border: 1px solid #000000;">
                        <a href="{{ route('teachers.show', $teacher) }}" style="color: #0b1f3a;">Огляд</a> |
                        <a href="{{ route('teachers.edit', $teacher) }}" style="color: #0b1f3a;">Редагувати</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="padding: 15px; border: 1px solid #000000; text-align: center;">
                        Записів за обраним фільтром не знайдено.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div>
            {{ $teachers->links() }}
        </div>
    </div>
@endsection
