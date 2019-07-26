<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/offers', 'OfferController@api_index');
Route::get('/offers/{offerId}/landing_page', 'LandingPageController@api_index');
Route::post('/offers/{offerId}/landing_page/create', 'LandingPageController@store')->name('landing_page.store');
Route::delete('/offer/{offerId}/landing_page/{landingPageId}/delete', 'LandingPageController@delete')->name('landing_page.delete');