@extends('layouts.app')
@section('title', 'Статистика відвідувань')
@section('content')
    <div style="max-width: 900px; margin: 0 auto;">
        <h1 style="margin-top: 0; margin-bottom: 18px; color: #0b1f3a;">Статистика відвідувань</h1>
        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 20px;">
            <a href="{{ route('stats.pages', ['type' => 'page']) }}" style="padding: 8px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; {{ $type === 'page' ? 'background: #0b1f3a; color: #ffffff;' : 'background: #ffffff; color: #0b1f3a;' }}">
                За сторінками
            </a>
            <a href="{{ route('stats.pages', ['type' => 'ip']) }}" style="padding: 8px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; {{ $type === 'ip' ? 'background: #0b1f3a; color: #ffffff;' : 'background: #ffffff; color: #0b1f3a;' }}">
                За IP-адресами
            </a>
            <a href="{{ route('stats.activity') }}" style="padding: 8px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; background: #ffffff; color: #0b1f3a;">
                Активність та методи
            </a>
        </div>
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border: 1px solid #cbd5e1;">
            <thead>
            <tr style="background: #0b1f3a; color: #ffffff; text-align: left;">
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $type === 'page' ? 'Сторінка' : 'IP-адреса' }}</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Звернень</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Останній візит</th>
            </tr>
            </thead>
            <tbody>
            @forelse($rows as $row)
                <tr>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">
                        <a href="{{ route('stats.detail', ['type' => $type, 'item' => $row->{$type}]) }}" style="color: #0b1f3a; font-weight: 600;">
                            {{ $row->{$type} }}
                        </a>
                    </td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->hits }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->last_visit }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="padding: 16px; border: 1px solid #cbd5e1; text-align: center;">Даних ще немає.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
