<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listingsArray = Listing::all();
        foreach($listingsArray as $listing) {
            dd($listing->fullname, "+".$listing->phone, $listing->email);
        }
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }
}
