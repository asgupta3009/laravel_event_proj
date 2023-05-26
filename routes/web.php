<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Genre Routes
Route::get('/genre', [GenreController::class, 'index'])->name('genre');
Route::get('/addgenre', [GenreController::class, 'addGenre'])->name('addgenre');
Route::post('/insertgenre', [GenreController::class, 'genreinsert'])->name('insertgenre');
Route::get('/editgenre/{id}', [GenreController::class, 'editgenre'])->name('editgenre');
Route::put('/editgenre/{id}', [GenreController::class, 'genreupdate'])->name('genreupdate');
Route::get('/delete/{id}', [GenreController::class, 'destroy'])->name('deletegenre');

//Artist Routes
Route::get('/artist', [ArtistController::class, 'index'])->name('artist');
Route::get('/addartist', [ArtistController::class, 'addArtist'])->name('addartist');
Route::post('/insertartist', [ArtistController::class, 'artistinsert'])->name('insertartist');
Route::get('/editartist/{id}', [ArtistController::class, 'editartist'])->name('editartist');
Route::put('/editartist/{id}', [ArtistController::class, 'artistupdate'])->name('artistupdate');
Route::get('/delete/{id}', [ArtistController::class, 'destroy'])->name('deleteartist');

//Venue Routes
Route::get('/venue', [VenueController::class, 'index'])->name('venue');
Route::get('/addvenue', [VenueController::class, 'addVenue'])->name('addvenue');
Route::post('/insertvenue', [VenueController::class, 'venueinsert'])->name('insertvenue');
/* Route::get('/editvenue/{id}', [VenueController::class, 'editvenue'])->name('editvenue');
Route::put('/editvenue/{id}', [VenueController::class, 'venueupdate'])->name('venueupdate');
Route::get('/delete/{id}', [VenueController::class, 'destroy'])->name('deletevenue'); */

//Events Routes
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/addevents', [EventsController::class, 'addEvents'])->name('addevents');
Route::post('/insertevents', [EventsController::class, 'eventsinsert'])->name('insertevents');
/* Route::get('/editvenue/{id}', [VenueController::class, 'editvenue'])->name('editvenue');
Route::put('/editvenue/{id}', [VenueController::class, 'venueupdate'])->name('venueupdate');
Route::get('/delete/{id}', [VenueController::class, 'destroy'])->name('deletevenue'); */
