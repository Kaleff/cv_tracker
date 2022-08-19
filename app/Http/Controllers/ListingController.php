<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Academia;
use App\Models\Accomplishment;
use App\Models\Experience;
use App\Http\Traits\ListingTrait;
use Illuminate\Http\Request; 

class ListingController extends Controller
{
    use ListingTrait;
    public function index()
    {
        $listingsArray = Listing::all();
        foreach($listingsArray as $listing) {
            dd($listing->fullname, "+".$listing->phone, $listing->email);
        }
    }

    public function show($id)
    {
        $listingData = $this->scrapeData($id);
        dd($listingData);

        return view('listing', $listingData);
    }

    public function edit()
    {
        //return view('edit_listing', $listingData);
    }
}
