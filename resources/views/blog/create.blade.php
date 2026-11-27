@extends('layouts.app')
@section('title', 'Новий запис блогу')
@section('content')
    <h1>Новий запис блогу</h1>
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        @include('blog._form')
        <button type="submit">Зберегти</button>
    </form>
@endsection
