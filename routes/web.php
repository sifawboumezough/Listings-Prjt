<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Models\Listing;


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

// All listings

Route::get('/' , function () {
    return view('listings', [
        'heading' => 'latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
    // Method 1
            // Route::get('/listings/{id}', function($id) {
            //     $listing = Listing::find($id);
            //     if($listing) {
            //         return view('listing', [
            //             'listing' => $listing
            //         ]);
            //     }else {
            //         abort('404');
            //     }
            // });


 // Method 2
            Route::get('/listings/{listing}', function(Listing $listing) {
                return view('listing', [
                    'listing' => $listing
                ]);
            });






