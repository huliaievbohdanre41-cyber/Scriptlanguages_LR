<?php
namespace App\Http\Controllers;
use App\Http\Requests\EntryRequest;
class SiteController extends Controller
{
    public function say(string $message = 'Привіт')
    {
        return view('sitetest.say', ['message' => $message]);
    }
    public function entry()
    {
        $universityName = 'КПІ ім. Ігоря Сікорського';
        $facultiesCount = 24;
        return view('sitetest.entry', compact('universityName', 'facultiesCount'));
    }
    public function entryStore(EntryRequest $request)
    {
        $validatedData = $request->validated();
        return view('sitetest.entry-confirm', $validatedData);
    }
}

