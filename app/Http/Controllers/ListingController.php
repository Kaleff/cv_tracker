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
        return view('homepage', ['listingsArray' => $listingsArray]);
    }

    public function show($id)
    {
        $listingData = $this->scrapeData($id);
        return view('listing/cvlisting', ['listingData' => $listingData]);
    }

    public function edit($id)
    {
        $listingData = $this->scrapeData($id);
        return view('listing/edit_listing', ['listingData' => $listingData]);
    }

    public function edit_info($id) 
    {
        $listingInfo = Listing::where('id', $id)
                                ->get();
        $listingInfo = $listingInfo->first();
        return view('listing/edit_info', ['listingInfo' => $listingInfo]);
    }
    public function create()
    {
        return view('listing/addlisting');
    }

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

    public function delete($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/');
    }
}
