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
}
