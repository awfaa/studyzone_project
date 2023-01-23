<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\notesController;
use App\Http\Controllers\FlashcardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

// Routes of Schedule
Route::get('sched', [ScheduleController::class, 'index']);
Route::resource('addsched', ScheduleController::class);
Route::get('/add-schedule', function () {
    return view('add-schedule');
});

// Routes of Notes
Route::get('notes', [notesController::class,'index']);
Route::get('/add-notes',[notesController::class,'index'])->name('notes.index');

// Route of StudyTracker
Route::get('/studytracker', function () {
    return view('studytracker');
});

//  Flashcard Controller
Route::get('flashcard', [FlashcardController::class, 'index']);


