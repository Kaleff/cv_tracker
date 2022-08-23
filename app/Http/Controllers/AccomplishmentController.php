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
            'course' => 'required',
            'status' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        Accomplishment::create($formFields);
        $cvid = $formFields['cvid'];
        return redirect('cv/'.$cvid);
    }

    // Delete entry

    public function delete($cvid, $id)
    {
        $listing = Accomplishment::find($id);
        $listing->delete();
        return redirect('cv/'.$cvid.'/edit');
    }
}
