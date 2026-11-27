@extends('layouts.app')
@section('title', 'Редагування запису')
@section('content')
    <h1>Редагувати запис</h1>
    <form method="POST" action="{{ route('blog.update', $blog) }}">
        @csrf
        @method('PUT')
        @include('blog._form')
        <button type="submit">Оновити</button>
    </form>
@endsection
