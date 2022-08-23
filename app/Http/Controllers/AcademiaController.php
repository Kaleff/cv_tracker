<?php

namespace App\Http\Controllers;

use App\Models\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    // New entry form

    public function create($cvid)
    {
        return view('academia/add', ['cvid'=> $cvid]);
    }

    // Store entry in database

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'title' => 'required',
            'course' => 'required',
            'status' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        Academia::create($formFields);
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid);
    }

    // Delete entry

    public function delete($cvid, $id)
    {
        $listing = Academia::find($id);
        $listing->delete();
        return redirect('cv/'.$cvid.'/edit');
    }

    // Edit form entry

    public function edit($cvid, $id)
    {
        // Scrape the old data to display on the edit form
        $listingInfo = Academia::where('id', $id)
                    ->get();
        $listingInfo = $listingInfo->first();
        return view('academia/edit', ['listingInfo' => $listingInfo]);
    }

    // Update entry

    public function update(Request $request)
    {
        $formFields = $request->validate([
            'cvid' => 'required',
            'title' => 'required',
            'course' => 'required',
            'status' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'id' => 'required'
        ]);
        // Getting the entry id from the request.
        $id = ($formFields['id']);
        $listing = Academia::find($id);
        $listing->update($formFields);
        // Getting an id of a CV the entry is attached to.
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid.'/edit');
    }
}
