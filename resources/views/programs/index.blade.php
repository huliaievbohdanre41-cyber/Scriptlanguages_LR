@extends('layouts.app')
@section('title', $locale === 'en' ? 'Educational Programs' : 'Навчальні програми')
@section('content')
    <div style="max-width: 1020px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; gap: 15px; flex-wrap: wrap; margin-bottom: 18px;">
            <div>
                <h1 style="margin: 0; color: #0b1f3a;">{{ $locale === 'en' ? 'Educational Programs' : 'Навчальні програми' }}</h1>
                <p style="margin: 6px 0 0; color: #475569;">{{ $locale === 'en' ? 'Academic programs available for students' : 'Перелік освітніх програм для студентів' }}</p>
            </div>
            <div class="lang-switcher">
                <a href="{{ route('programs.index', array_merge(request()->except('lang'), ['lang' => 'uk'])) }}" class="lang-btn {{ $locale === 'uk' ? 'active' : '' }}">УКР</a>
                <a href="{{ route('programs.index', array_merge(request()->except('lang'), ['lang' => 'en'])) }}" class="lang-btn {{ $locale === 'en' ? 'active' : '' }}">ENG</a>
            </div>
        </div>
        <div class="programs-grid">
            @forelse($programs as $program)
                @include('programs._item', ['program' => $program, 'locale' => $locale])
            @empty
                <p>{{ $locale === 'en' ? 'No programs found.' : 'Навчальних програм ще немає.' }}</p>
            @endforelse
        </div>
        <div style="margin-top: 20px;">{{ $programs->links() }}</div>
    </div>
@endsection
