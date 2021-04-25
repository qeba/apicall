<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SlackController;


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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/listrequest', [SlackController::class, 'viewUrl'])->name('listrequest');




//route for testing singed url
Route::get('/start', function (Request $request) {
    if (! $request->hasValidSignature()) {
        abort(401);
    }
    return view('started');
})->name('start');

//route handle view for temporay pages
Route::middleware('link')->get('/starting', function (Request $request) {
    return view('started');
})->name('starting');

//route for slack genearte
Route::middleware(['auth:sanctum', 'verified'])->post('/generatelink/create', [SlackController::class, 'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/baru', function () {
    return view('baru');
})->name('baru');
