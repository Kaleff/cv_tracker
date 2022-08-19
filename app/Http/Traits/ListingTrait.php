<?php

namespace App\Http\Traits;

use App\Models\Listing;
use App\Models\Academia;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Accomplishment;

trait ListingTrait
{
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function scrapeData($id) {
        $shownListing = Listing::where('id' , $id)
                            ->get()[0];
        $experiences = Experience::where('cvid', $id)
                            ->get();
        $education = Academia::where('cvid', $id)
                            ->get();
        $achievments = Accomplishment::where('cvid', $id)
                            ->get();        
        $listingData = [
            'mainInfo' => $shownListing,
            'workExp' => $experiences,
            'education' => $education,
            'achievments' => $achievments
        ];
        return $listingData;
    }
}