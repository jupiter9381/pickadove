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
Route::post('resetPassword', 'ApiController@resetPassword');
Route::post('logout', 'ApiController@logout');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('logout', 'ApiController@logout');

    Route::get('user', 'ApiController@getAuthUser');

    Route::post('doVerification', 'ApiController@verification');

    Route::post('getProfileFields', 'FieldController@getProfileFields');
    Route::post('saveProfileInfo', 'ProfileController@saveProfileFields');

    Route::post('updateLocation', 'ProfileController@updateLocation');

    Route::post('getProfileReviews', 'ProfileController@getProfileReviews');
    Route::post('saveReview', 'ProfileController@saveReview');

    Route::post('updateProfileService', 'ProfileController@updateProfileService');
    Route::post('makePublic', 'ProfileController@makePublic');

    Route::post('getPublicProfiles', 'ProfileController@getPublicProfiles');

    Route::post('getUserInfo', 'ApiController@getUserInfo');
});
