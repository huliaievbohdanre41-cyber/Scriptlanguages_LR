@extends('layouts.app')
@section('title', $blog->title)
@section('content')
    <article>
        <h1>{{ $blog->title }}</h1>
        <p>
            Категорія: {{ $blog->category?->category_name ?? 'Без категорії' }}
            &middot; Автор: {{ $blog->author?->name ?? 'Редакція' }}
            &middot; {{ $blog->dt_created?->format('d.m.Y H:i') }}
        </p>
        @if($blog->description)
            <p><strong>{{ $blog->description }}</strong></p>
        @endif
        <div>{!! nl2br(e($blog->text)) !!}</div>
    </article>
    <p style="margin-top: 20px;">
        <a href="{{ route('blog.edit', $blog) }}">Редагувати</a> |
        <a href="{{ route('blog.index') }}">До списку</a>
    </p>
@endsection
