<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StatsController;
use App\Http\Middleware\TrackVisit;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProgramController;

Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/programs/{program}', [ProgramController::class, 'show'])->name('programs.show');
Route::get('/blog/admin', [BlogController::class, 'admin'])->name('blog.admin');
Route::resource('blog', BlogController::class);

Route::get('/stats/detail', [StatsController::class, 'detail'])->name('stats.detail');
Route::get('/stats', [StatsController::class, 'pages'])->name('stats.pages');

Route::resource('teachers', TeacherController::class);
Route::resource('country', CountryController::class);

Route::get('/', function () { return view('welcome');});
Route::get('/say/{message?}',[SiteController::class, 'say'])->name('site.say');
Route::get('/entry',[SiteController::class, 'entry'])->name('entry.form');
Route::post('/entry',[SiteController::class, 'entryStore'])->name('entry.store');
Route::view('/about','site.about')->name('site.about');
Route::view('/contact','site.contact')->name('site.contact');
Route::get('/landing', [LandingController::class, 'index'])->name('landing.index');
Route::post('/landing', [LandingController::class, 'store'])->name('landing.store');

Route::get('/', function () {return view('welcome');});
Route::get('/stats/activity', [StatsController::class, 'activity'])->name('stats.activity');
