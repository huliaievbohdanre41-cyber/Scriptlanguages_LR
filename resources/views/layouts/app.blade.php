<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Університет')</title>
    <style>
        nav[role="navigation"] svg,
        nav[role="navigation"] a[rel="prev"],
        nav[role="navigation"] a[rel="next"],
        nav[role="navigation"] span[aria-label*="Previous"],
        nav[role="navigation"] span[aria-label*="Next"],
        nav[role="navigation"] > div:first-child,
        nav[role="navigation"] > div > div:first-child {
            display: none !important;
        }
        .blog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin: 24px 0; }
        .blog-card { background: #ffffff; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; transition: transform 0.2s, box-shadow 0.2s; }
        .blog-card:hover { transform: translateY(-4px); box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12); }
        .blog-card-image { width: 100%; height: 180px; object-fit: cover; display: block; }
        .blog-card-body { padding: 16px; }
        .blog-category { font-size: 13px; color: #2563eb; font-weight: bold; }
        .blog-meta { font-size: 13px; color: #666; }

        .programs-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); gap: 20px; margin: 20px 0; }
        .program-card { background: #ffffff; border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; transition: transform 0.2s, box-shadow 0.2s; }
        .program-card:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(11, 31, 58, 0.12); }
        .program-card-image { width: 100%; height: 175px; object-fit: cover; display: block; }
        .program-card-body { padding: 16px; display: flex; flex-direction: column; flex: 1; }
        .program-card-top, .program-card-footer { display: flex; justify-content: space-between; align-items: center; gap: 8px; }
        .program-card-top { margin-bottom: 10px; }
        .program-badge { background: #e2e8f0; color: #0b1f3a; font-size: 12px; font-weight: 700; padding: 3px 8px; border-radius: 4px; }
        .program-meta-tag, .program-level { font-size: 12px; color: #475569; }
        .program-card-title { margin: 0 0 6px; font-size: 18px; line-height: 1.3; }
        .program-card-title a, .program-card-title a:visited {color: #000000; text-decoration: none;}
        .program-department { margin: 0 0 8px; font-size: 13px; color: #2563eb; font-weight: 600; }
        .program-description { margin: 0 0 14px; font-size: 14px; line-height: 1.5; color: #334155; flex: 1; }
        .program-card-footer { padding-top: 10px; border-top: 1px solid #e2e8f0; font-size: 13px; }
        .program-link { color: #0b1f3a; font-weight: 700; text-decoration: none; }

        .lang-switcher { display: inline-flex; align-items: center; gap: 6px; padding: 4px; background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 8px; }
        .lang-btn { display: inline-block; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 700; color: #0b1f3a; transition: 0.2s; }
        .lang-btn:hover { background: #e2e8f0; }
        .lang-btn.active { background: #0b1f3a; color: #ffffff; }
        .program-fallback-box { margin: 12px 0 16px; padding: 10px 14px; font-size: 13px; font-weight: 600; color: #92400e; background: #fef3c7; border: 1px solid #f59e0b; border-radius: 8px; }
    </style>
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
        <a href="{{ route('teachers.index') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Викладачі</a>
        <a href="{{ url('/about') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Студентам</a>
        <a href="{{ route('stats.pages') }}" style="color: #000000; text-decoration: none; font-weight: bold; font-size: 16px;">Статистика</a>
    </nav>
</header>
<main style="flex: 1; padding: 50px; color: #000000;">@yield('content')</main>
<footer style="padding: 20px; text-align: center; background-color: #000000; color: #ffffff; font-size: 14px; line-height: 1.6;">
    <div>Виконав: Гуляєв Б. А., група РЕ-41.</div>
    <div>© 2026 КПІ ім. Ігоря Сікорського</div>
</footer>
</body>
</html>
