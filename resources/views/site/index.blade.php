@extends('layouts.app')
@section('title', 'Лендінг — ' . $universityName)
@section('content')
    <div style="max-width: 700px; margin: 0 auto; text-align: left;">
        <h1 style="margin-bottom: 10px; text-align: center;"> 🏛️ {{ $universityName }} </h1>
        <form action="{{ route('landing.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Ім'я *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" style="width: 100%; padding: 8px; border: 1px solid #000; box-sizing: border-box;">
                @error('name')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Email *</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" style="width: 100%; padding: 8px; border: 1px solid #000; box-sizing: border-box;">
                @error('email')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>
            <div style="margin-bottom: 20px;">
                <label for="phone" style="display: block; font-weight: bold; margin-bottom: 8px; color: #000000;">Номер телефону</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+380" style="width: 100%; padding: 10px; border: 1px solid {{ $errors->has('phone') ? '#d9534f' : '#000000' }}; border-radius: 2px; box-sizing: border-box; font-size: 15px;">
                @error('phone')
                <span style="color: #d9534f; font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                @enderror
            </div>
            <div style="margin-bottom: 20px;">
                <label for="message" style="display: block; font-weight: bold; margin-bottom: 5px;">Повідомлення *</label>
                <textarea id="message" name="message" rows="4" style="width: 100%; padding: 8px; border: 1px solid #000; box-sizing: border-box;">{{ old('message') }}</textarea>
                @error('message')
                <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" style="background: #0b1f3a; color: #fff; border: none; padding: 10px; font-weight: bold; width: 100%; cursor: pointer;">
                Надіслати
            </button>
        </form>
    </div>
@endsection
