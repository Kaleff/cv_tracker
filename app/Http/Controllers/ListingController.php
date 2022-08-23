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

    // Show all listings

    public function index()
    {
        $listingsArray = Listing::all();
        return view('homepage', ['listingsArray' => $listingsArray]);
    }

    // Show a specific listing

    public function show($id)
    {
        $listingData = $this->scrapeData($id);
        return view('listing/cvlisting', ['listingData' => $listingData]);
    }

    // Show a listing with edit option

    public function edit($id)
    {
        $listingData = $this->scrapeData($id);
        return view('listing/edit_listing', ['listingData' => $listingData]);
    }

    // Form to edit main information of listing

    public function edit_info($id)
    {
        $listingInfo = Listing::where('id', $id)
            ->get();
        $listingInfo = $listingInfo->first();
        return view('listing/edit_info', ['listingInfo' => $listingInfo]);
    }

    // Form to create new listing

    public function create()
    {
        return view('listing/addlisting');
    }

    // Method to store the new listing

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email'],
            'location' => 'required',
            'address' => 'required',
            'pastindex' => 'required',
        ]);
        Listing::create($formFields);
        return redirect('/');
    }

    // Method to delete the listing

    public function delete($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/');
    }

    // Method to update the listing information

    public function update(Request $request)
    {
        $formFields = $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'email' => ['required', 'email'],
            'location' => 'required',
            'address' => 'required',
            'pastindex' => 'required',
            'id' => 'required'
        ]);
        $id = ($formFields['id']);
        $listing = Listing::find($id);
        $listing->update($formFields);
        return redirect('/');
    }
}
