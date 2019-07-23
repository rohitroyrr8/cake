<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

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
    	$request->session()->flash('error','Item created successfully.');

    	return view('offer.index');
    }

    public function api_index(Request $request)
    {
    	$offers = Offer::all();
    	return response()
            ->json([
                'offers' => $offers
                
            ]);
    }
}
