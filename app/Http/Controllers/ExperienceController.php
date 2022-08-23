<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    // New entry form

    public function create($cvid)
    {
        return view('experience/add', ['cvid'=> $cvid]);
    }

    // Store entry

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'company' => 'required',
            'role' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        Experience::create($formFields);
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid.'/edit');
    }

    // Delete entry

    public function delete($cvid, $id)
    {
        $listing = Experience::find($id);
        $listing->delete();
        return redirect('cv/'.$cvid.'/edit');
    }

    // Edit form entry

    public function edit($cvid, $id)
    {
        // Scrape the old data to display on the edit form
        $listingInfo = Experience::where('id', $id)
                                    ->get();
        $listingInfo = $listingInfo->first();
        return view('experience/edit', ['listingInfo' => $listingInfo]);
    }

    // Update entry

    public function update(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'company' => 'required',
            'role' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'id' => 'required'
        ]);
        // Getting the entry id from the request.
        $id = ($formFields['id']);
        $listing = Experience::find($id);
        $listing->update($formFields);
        // Getting an id of a CV the entry is attached to.
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid.'/edit');
    }
}
