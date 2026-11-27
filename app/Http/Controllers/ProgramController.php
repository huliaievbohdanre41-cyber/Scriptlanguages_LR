<?php
namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;
class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $allowedLocales = ['uk', 'en'];
        $locale = $request->query('lang', 'uk');
        if (!in_array($locale, $allowedLocales, true)) {$locale = 'uk';}
        $programs = Program::with('translations')
            ->orderBy('id')
            ->paginate(6)
            ->withQueryString();
        return view('programs.index', compact('programs', 'locale'));
    }
    public function show(Request $request, Program $program)
    {
        $allowedLocales = ['uk', 'en'];
        $locale = $request->query('lang', 'uk');
        if (!in_array($locale, $allowedLocales, true)) {$locale = 'uk';}
        $program->load('translations');
        return view('programs.show', compact('program', 'locale'));
    }
}
