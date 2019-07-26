<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingPage;
class LandingPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['api_index']);
    }

    public function api_index(Request $request, $offerId)
    {
    	$landing_pages = LandingPage::where('offer_id', $offerId)->get();
    	
    	return response()
            ->json([
                'landing_pages' => $landing_pages,
                'message' => 'Landing Page fetched successfully'
            ]);
    }

    public function store(Request $request, $offerId)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'url' => 'required',
    		'offerId' =>'required'
    	]);

    	$page = new LandingPage();
    	
    	$page->name = $request->input('name');
    	$page->url = $request->input('url');
    	$page->offer_id = $request->input('offerId');
    	$page->save();

    	return response()
    			->json([
    				'landing_pages' => '',
    				'message' => 'Landing Page Saved.'
    			]);
    }

    public function delete($offerId, $landingPageId)
    {
    	$page = LandingPage::find($landingPageId);
    	$page->delete();

    	return response()
    			->json([
    				'message' => 'Landing Page Deleted.'
    			]);
    }
}
