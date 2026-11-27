@php
    $tr = $program->translationFor($locale, 'uk');
    $title = $tr?->title ?? 'Навчальна програма';
    $department = $tr?->department ?? 'Кафедра';
    $description = $tr?->description ?? '';
    $isFallback = $tr && $tr->locale !== $locale;
    $showUrl = route('programs.show', ['program' => $program, 'lang' => $locale]);
@endphp
<article class="program-card">
    <a href="{{ $showUrl }}"><img src="{{ asset('images/blog-placeholder.jpg') }}" alt="{{ $title }}" class="program-card-image"></a>
    <div class="program-card-body">
        <div class="program-card-top">
            <span class="program-badge">{{ $program->code }}</span>
            <span class="program-meta-tag">
                {{ $program->duration_years }} {{ $locale === 'en' ? 'yrs' : 'р.' }}
                &middot; {{ $program->credits }} ECTS
            </span>
        </div>
        <h2 class="program-card-title"><a href="{{ $showUrl }}">{{ $title }}</a></h2>
        <p class="program-department">{{ $department }}</p>
        @if($isFallback)
            <div class="program-fallback-box">
                {{ $locale === 'en'
                    ? 'Shown in Ukrainian (English translation is not available yet)'
                    : 'Показано основною мовою' }}
            </div>
        @endif
        <p class="program-description">{{ \Illuminate\Support\Str::limit($description, 135) }}</p>
        <div class="program-card-footer">
            <span class="program-level">{{ $program->levelLabel($locale) }}</span>
            <a href="{{ $showUrl }}" class="program-link">{{ $locale === 'en' ? 'Explanation →' : 'Пояснення →' }}</a>
        </div>
    </div>
</article>
