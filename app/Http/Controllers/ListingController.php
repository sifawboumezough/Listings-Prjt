<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Display;Show all Listings
    public function index() {
        return view('listings.index', [
            'heading' => 'latest Listings',
            'listings' => Listing::all()
        ]);
    }

    // display,Show Listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
