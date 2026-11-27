@extends('layouts.app')
@php
    $tr = $program->translationFor($locale, 'uk');
    $title = $tr?->title ?? 'Навчальна програма';
    $department = $tr?->department ?? 'Кафедра';
    $description = $tr?->description ?? '';
    $isFallback = $tr && $tr->locale !== $locale;
@endphp
@section('title', $title)
@section('content')
    <div style="max-width: 820px; margin: 0 auto; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden;">
        <img src="{{ asset('images/blog-placeholder.jpg') }}" alt="{{ $title }}" style="width: 100%; height: 240px; object-fit: cover; display: block;">
        <div style="padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px; flex-wrap: wrap; margin-bottom: 14px;">
                <span class="program-badge">{{ $program->code }} &middot; {{ $program->levelLabel($locale) }}</span>
                <div class="lang-switcher">
                    <a href="{{ route('programs.show', ['program' => $program, 'lang' => 'uk']) }}" class="lang-btn {{ $locale === 'uk' ? 'active' : '' }}">УКР</a>
                    <a href="{{ route('programs.show', ['program' => $program, 'lang' => 'en']) }}" class="lang-btn {{ $locale === 'en' ? 'active' : '' }}">ENG</a>
                </div>
            </div>
            <h1 style="margin: 0 0 10px; color: #0b1f3a;">{{ $title }}</h1>
            <p style="margin: 0 0 12px; color: #2563eb; font-weight: 600;">{{ $department }}</p>
            @if($isFallback)
                <div class="program-fallback-box">
                    {{ $locale === 'en'
                        ? 'Shown in Ukrainian (English translation is not available yet)'
                        : 'Показано основною мовою' }}
                </div>
            @endif
            <p style="margin: 0 0 20px; line-height: 1.6; color: #1e293b;">{{ $description }}</p>
            <p style="margin: 0 0 20px; color: #475569;">
                <strong>{{ $locale === 'en' ? 'Duration:' : 'Термін навчання:' }}</strong> {{ $program->duration_years }}
                &nbsp;&nbsp;
                <strong>{{ $locale === 'en' ? 'Credits:' : 'Обсяг:' }}</strong> {{ $program->credits }} ECTS
            </p>
            <a href="{{ route('programs.index', ['lang' => $locale]) }}" style="display: inline-block; background: #0b1f3a; color: #ffffff; padding: 9px 16px; border-radius: 5px; text-decoration: none; font-weight: bold;">{{ $locale === 'en' ? 'Back to programs' : 'До переліку програм' }}</a>
        </div>
    </div>
@endsection
