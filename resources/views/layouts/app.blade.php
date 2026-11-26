<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Університет')</title>
</head>
<body style="margin: 0; min-height: 100vh; display: flex; flex-direction: column; font-family: Arial, sans-serif; background-color: #f0f4f8; color: #000000;">
<header style="display: flex; justify-content: space-between; align-items: center; padding: 20px 50px; border-bottom: 2px solid #0b1f3a; background-color: #ffffff;">
    <div style="display: flex; align-items: center; gap: 12px;">
        <div style="font-size: 42px;">🏛️</div>
        <div style="font-size: 28px; font-weight: bold; color: #000001;">Університет</div>
    </div>
    <nav style="display: flex; gap: 30px;">
        <a href="{{ url('/') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Головна</a>
        <a href="{{ url('/landing') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Зворотний зв'язок</a>
        <a href="{{ url('/contact') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Викладачі</a>
        <a href="{{ url('/about') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Студентам</a>
    </nav>
</header>
<main style="flex: 1; padding: 50px; color: #000000;">@yield('content')</main>
<footer style="padding: 20px; text-align: center; background-color: #000000; color: #ffffff; font-size: 14px; line-height: 1.6;">
    <div>Виконав: Гуляєв Б. А., група РЕ-41.</div>
    <div>© 2026 КПІ ім. Ігоря Сікорського</div>
</footer>
</body>
</html>
