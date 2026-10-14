<?php
namespace App\Http\Controllers;
use App\Http\Requests\LandingFeedbackRequest;

class LandingController extends Controller
{
    public function index()
    {
        $universityName = 'Університет';
        return view('site.index', compact('universityName'));
    }
    public function store(LandingFeedbackRequest $request)
    {
        $validated = $request->validated();

        return view('site.confirm', $validated);
    }
}
