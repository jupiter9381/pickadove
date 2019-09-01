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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
Route::post('checkVerification', 'ApiController@checkVerification');
Route::post('passwordRecovery', 'ApiController@passwordRecovery');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');

    Route::get('user', 'ApiController@getAuthUser');

    Route::post('doVerification', 'ApiController@verification');

    Route::post('getProfileFields', 'FieldController@getProfileFields');
    Route::post('saveProfileInfo', 'ProfileController@saveProfileFields');

    Route::post('updateLocation', 'ProfileController@updateLocation');

    Route::post('getProfileReviews', 'ProfileController@getProfileReviews');
    Route::post('saveReview', 'ProfileController@saveReview');
});
