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
            'title' => 'required',
            'course' => 'required',
            'status' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        Experience::create($formFields);
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid);
    }

    // Delete entry

    public function delete($cvid, $id)
    {
        $listing = Experience::find($id);
        $listing->delete();
        return redirect('cv/'.$cvid.'/edit');
    }
}
