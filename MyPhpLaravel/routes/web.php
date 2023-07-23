<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Listings',
        'listings' => Listing::all()
    ]);
});

//  single listing
Route::get('/listings/{id}', function ($id) {
    return view('listings', [
        'listing' => Listing::find($id)
    ]);
}); 