<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('index');
});

Route::post('/logout', [App\Http\Controllers\aurController::class, 'logout'])->name('logout');

//Route::get('/login', [App\Http\Controllers\logginController::class, 'Login'])->name('login');
Route::get('/about', [App\Http\Controllers\aurController::class, 'about'])->name('about');
Route::post('/abouts', [App\Http\Controllers\aurController::class, 'abouts'])->name('abouts');


Route::get('/classes', [App\Http\Controllers\aurController::class, 'classes'])->name('classes');
Route::post('/class', [App\Http\Controllers\aurController::class, 'class'])->name('class');

Route::get('/contact', [App\Http\Controllers\aurController::class, 'contact'])->name('contacts');
Route::post('/contacts', [App\Http\Controllers\aurController::class, 'contacts'])->name('contacts');

Route::get('/teacher', [App\Http\Controllers\aurController::class, 'teacher'])->name('teacher');
Route::post('/teachers', [App\Http\Controllers\aurController::class, 'teachers'])->name('teachers');

Route::get('/guide', [App\Http\Controllers\aurController::class, 'guide'])->name('guide');
Route::post('/guides', [App\Http\Controllers\aurController::class, 'guides'])->name('guides');

Route::get('/policies', [App\Http\Controllers\aurController::class, 'policies'])->name('policies');
Route::post('/policy', [App\Http\Controllers\aurController::class, 'policy'])->name('policy');

Route::get('/curriculum', [App\Http\Controllers\aurController::class, 'curriculum'])->name('curriculum');
Route::post('/curriculums', [App\Http\Controllers\aurController::class, 'curriculums'])->name('curriculums');


Route::get('/admission', [App\Http\Controllers\aurController::class, 'admission'])->name('admission');
Route::post('/admissions', [App\Http\Controllers\aurController::class, 'admissions'])->name('admissions');

Route::get('/register', [App\Http\Controllers\registrationController::class, 'register'])->name('register');
Route::post('/Registrations', [App\Http\Controllers\registrationController::class, 'registers'])->name('registers');


Route::get('/login', [App\Http\Controllers\SignInController::class, 'login'])->name('login');
Route::post('/Authenticate', [App\Http\Controllers\SignInController::class, 'Authenticate'])->name('Authenticate');


Route::post('/logout', [App\Http\Controllers\SignInController::class, 'logout'])->name('logout');


Route::get('/register', [App\Http\Controllers\aurController::class, 'register'])->name('register');
Route::post('/Registrations', [App\Http\Controllers\aurController::class, 'Registrations'])->name('Registrations');


Route::resource('/events', eventController::class);

// Route::get('/events.create', [App\Http\Controllers\EventController::class, 'create'])->name('events.create');
// Route::post('/SubmitEvent',  [App\Http\Controllers\EventController::class, 'SubmitEvent'])->name('SubmitEvent');

Route::get('/events.edits/{id}', [App\Http\Controllers\eventController::class, 'edits'])->name('events.edits');
Route::post('/events/{id}/edits', [App\Http\Controllers\eventController::class, 'events'])->name('events');
// Route::post('/events/{id}/edit', [App\Http\Controllers\aurController::class, 'events'])->name('events');

//Route::get('/events/{id}/shows', [App\Http\Controllers\eventController::class, 'event'])->name('event');

Route::get('/events.shows/{id}', [App\Http\Controllers\eventController::class, 'shows'])->name('events.shows');