<?php

namespace App\Http\Controllers;

use App\Models\Accomplishment;
use Illuminate\Http\Request;

class AccomplishmentController extends Controller
{
    // New entry form

    public function create($cvid)
    {
        return view('accomplishment/add', ['cvid'=> $cvid]);
    }

    // Store entry in database

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'title' => 'required',
            'description' => 'required',
            'type' => 'required'
        ]);
        Accomplishment::create($formFields);
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid.'/edit');
    }

    // Delete entry

    public function delete($cvid, $id)
    {
        $listing = Accomplishment::find($id);
        $listing->delete();
        return redirect('cv/'.$cvid.'/edit');
    }

    // Edit form entry

    public function edit($cvid, $id)
    {
        // Scrape the old data to display on the edit form
        $listingInfo = Accomplishment::where('id', $id)
                    ->get();
        $listingInfo = $listingInfo->first();
        return view('accomplishment/edit', ['listingInfo' => $listingInfo]);
    }

    // Update entry

    public function update(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'id' => 'required'
        ]);
        // Getting the entry id from the request.
        $id = ($formFields['id']);
        $listing = Accomplishment::find($id);
        $listing->update($formFields);
        // Getting an id of a CV the entry is attached to.
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid.'/edit');
    }
}
