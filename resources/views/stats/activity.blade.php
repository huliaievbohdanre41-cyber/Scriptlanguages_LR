@extends('layouts.app')
@section('title', 'Додаткова статистика активності')
@section('content')
    <div style="max-width: 900px; margin: 0 auto;">
        <h1 style="margin-top: 0; margin-bottom: 16px; color: #0b1f3a;">Додаткова статистика активності</h1>
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 24px;">
            <a href="{{ route('stats.pages', ['type' => 'page']) }}" style="padding: 8px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; background: #ffffff; color: #0b1f3a;">← До загальної статистики</a>
            <a href="{{ route('stats.pages', ['type' => 'ip']) }}" style="padding: 8px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; background: #ffffff; color: #0b1f3a;">За IP-адресами</a>
        </div>
        <h2 style="margin-top: 0; margin-bottom: 12px; color: #0b1f3a; font-size: 20px;">Найчастіше переглядані картки викладачів</h2>
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border: 1px solid #cbd5e1; margin-bottom: 28px;">
            <thead>
            <tr style="background: #0b1f3a; color: #ffffff; text-align: left;">
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Сторінка</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Переглядів</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Унікальних IP</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Останній візит</th>
            </tr>
            </thead>
            <tbody>
            @forelse($popularTeachers as $row)
                <tr>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->page }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->hits }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->visitors }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->last_visit }}</td>
                </tr>
            @empty
                <tr><td colspan="4" style="padding: 16px; border: 1px solid #cbd5e1; text-align: center;">Переглядів карток викладачів ще немає.</td></tr>
            @endforelse
            </tbody>
        </table>
        <h2 style="margin-top: 0; margin-bottom: 12px; color: #0b1f3a; font-size: 20px;">Кількість запитів за HTTP-методами</h2>
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border: 1px solid #cbd5e1;">
            <thead>
            <tr style="background: #0b1f3a; color: #ffffff; text-align: left;">
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Метод</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Кількість запитів</th>
            </tr>
            </thead>
            <tbody>
            @forelse($byMethod as $row)
                <tr>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;"><strong>{{ $row->method }}</strong></td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->hits }}</td>
                </tr>
            @empty
                <tr><td colspan="2" style="padding: 16px; border: 1px solid #cbd5e1; text-align: center;">Даних ще немає.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
