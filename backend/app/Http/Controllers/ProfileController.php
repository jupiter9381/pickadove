<?php

namespace App\Http\Controllers;
use Auth;
use JWTAuth;

use Illuminate\Http\Request;
use App\Profile;
use APP\User;
use App\Review;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.jwt');
    }
    //
    public function saveProfileFields(Request $request){
        $user_id = Auth::user()->id;

        $mandatory = $request->input('mandatory');
        $contacts = $request->input('contacts');
        $dropdowns = $request->input('dropdowns');

        foreach($mandatory as $key => $value) {
            $profile = Profile::where('user_id', $user_id)->where('field_id', $value['id'])->first();
            if($profile) {
                Profile::where('user_id', $user_id)->where('field_id', $value['id'])->update(array('value' => $value['value']));
            } else {
                Profile::create([
                    'user_id' => $user_id,
                    'field_id' => $value['id'],
                    'value' => $value['value']
                ]);
            }
        }
        foreach($contacts as $key => $value) {
            $profile = Profile::where('user_id', $user_id)->where('field_id', $value['id'])->first();
            if($profile) {
                Profile::where('user_id', $user_id)->where('field_id', $value['id'])->update(array('value' => $value['value']));
            } else {
                Profile::create([
                    'user_id' => $user_id,
                    'field_id' => $value['id'],
                    'value' => $value['value']
                ]);
            }
        }
        foreach($dropdowns as $key => $value) {
            $profile = Profile::where('user_id', $user_id)->where('field_id', $value['id'])->first();
            if($profile) {
                Profile::where('user_id', $user_id)->where('field_id', $value['id'])->update(array('value' => json_encode($value['value'])));
            } else {
                Profile::create([
                    'user_id' => $user_id,
                    'field_id' => $value['id'],
                    'value' => $value['value']
                ]);
            }
        }
        return response()->json(['status' => 'success', 'result' => $dropdowns], 200);
    }

    public function updateLocation(Request $request) {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->state = $request->input('state');
        $user->suburb = $request->input('suburb');
        $user->country = $request->input('country');
        $user->save();
        return response()->json(['status' => 'success', 'result' => 'Update location successfully.'], 200);
    }

    public function getProfileReviews(Request $request) {
        $user_id = Auth::user()->id;

        $comments = DB::table('reviews')->select('reviews.*')->join('users', 'users.id', '=', 'reviews.receiver_id')->where('reviews.type', 1)->get();
        $complaints = DB::table('reviews')->select('reviews.*')->join('users', 'users.id', '=', 'reviews.receiver_id')->where('reviews.type', 2)->get();
        return response()->json(['status' => 'success', 'comments' => $comments, 'complaints' => $complaints], 200);
    }

    public function saveReview(Request $request){
        $review = new Review;
        $review->receiver_id = Auth::user()->id;
        $review->username = $request->input('username');
        $review->notes = $request->input('notes');
        $review->type = $request->input('type');
        $review->parent = 0;
        $review->depth = 0;
        $review->save();
        return response()->json(['status' => 'success', 'type'=>$request->input('type'), 'result' => 'Committed review successfully.', 'review' => $review], 200);
    }

    public function updateProfileService(Request $request) {
        $user_id = Auth::user()->id;
        $field_id = $request->input('field_id');
        if($request->input('value') == true){
            $value = 1;
        } else {
            $value = 0;
        }
        $profile = Profile::where('user_id', $user_id)->where('field_id', $field_id)->first();
        if($profile) {
            Profile::where('user_id', $user_id)->where('field_id', $field_id)->update(array('value' => $value));
        } else {
            Profile::create([
                'user_id' => $user_id,
                'field_id' => $field_id,
                'value' => $value
            ]);
        }
        return response()->json(['status' => 'success', 'result' => 'Updated service successfully.'], 200);
    }
    public function makePublic(Request $request) {
        $user_id = Auth::user()->id;
        $visible = $request->input('visible');
        $user = User::find($user_id);
        $user->visible = $visible;
        $user->save();
        return response()->json(['status' => 'success', 'result' => 'Profile is live now'], 200);
    }
}
