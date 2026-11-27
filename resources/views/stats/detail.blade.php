@extends('layouts.app')
@section('title', 'Детальна статистика')
@section('content')
    <div style="max-width: 900px; margin: 0 auto;">
        <h1 style="margin-top: 0; margin-bottom: 14px; color: #0b1f3a;">Детальна статистика</h1>
        <div style="display: flex; justify-content: space-between; align-items: center; gap: 12px; flex-wrap: wrap; margin-bottom: 20px; background: #ffffff; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 4px;">
            <div>Фільтр: <strong>{{ $type }}</strong> = <strong>{{ $item }}</strong></div>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                <a href="{{ route('stats.pages', ['type' => $type]) }}" style="padding: 7px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; background: #ffffff; color: #0b1f3a;">
                    ← До зведення
                </a>
                <a href="{{ route('stats.activity') }}" style="padding: 7px 14px; border: 1px solid #0b1f3a; border-radius: 4px; text-decoration: none; font-weight: bold; background: #0b1f3a; color: #ffffff;">
                    Активність та методи
                </a>
            </div>
        </div>
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border: 1px solid #cbd5e1; margin-bottom: 18px;">
            <thead>
            <tr style="background: #0b1f3a; color: #ffffff; text-align: left;">
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Сторінка</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">IP</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Статус</th>
                <th style="padding: 10px 14px; border: 1px solid #cbd5e1;">Дата і час</th>
            </tr>
            </thead>
            <tbody>
            @forelse($rows as $row)
                <tr>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->page }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->ip }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->status }}</td>
                    <td style="padding: 10px 14px; border: 1px solid #cbd5e1;">{{ $row->visited_at->format('d.m.Y H:i:s') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding: 16px; border: 1px solid #cbd5e1; text-align: center;"></td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div>{{ $rows->links() }}</div>
    </div>
@endsection
