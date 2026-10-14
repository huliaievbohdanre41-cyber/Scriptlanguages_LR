<?php
namespace App\Http\Controllers;
use App\Http\Requests\EntryRequest;
class SiteController extends Controller
{
    public function say(string $message = 'Привіт')
    {
        return view('site.say', ['message' => $message]);
    }
    public function entry()
    {
        $universityName = 'КПІ ім. Ігоря Сікорського';
        $facultiesCount = 24;
        return view('site.entry', compact('universityName', 'facultiesCount'));
    }
    public function entryStore(EntryRequest $request)
    {
        $validatedData = $request->validated();
        return view('site.entry-confirm', $validatedData);
    }
}

