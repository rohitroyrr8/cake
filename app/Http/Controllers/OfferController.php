<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use Illuminate\Support\Facades\Session;

class OfferController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['api_index']);
    }

    public function index(Request $request)
    {	
    	return view('offer.index')->with('offerId', $offerId);
    }

    public function api_index(Request $request)
    {
    	$offers = Offer::all();
    	
    	return response()
            ->json([
                'offers' => $offers,
                'message' => 'Item fetched successfully'
            ]);
    }

    public function show($offerId, Request $request)
    {	
    	$offer = Offer::find($offerId)->get();
    	return view('offer.show')->with('offer', $offer)
                                 ->with('offerId', $offerId);
    }
}
