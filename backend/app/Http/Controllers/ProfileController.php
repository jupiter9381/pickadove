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
            Profile::create([
                'user_id' => $user_id,
                'field_id'  => $value['id'],
                'value' => $value['value'],
            ]);
        }
        foreach($contacts as $key => $value) {
            Profile::create([
                'user_id' => $user_id,
                'field_id'  => $value['id'],
                'value' => $value['value'],
            ]);
        }
        foreach($dropdowns as $key => $value) {
            Profile::create([
                'user_id' => $user_id,
                'field_id'  => $value['id'],
                'value' => json_encode($value['value']),
            ]);
        }
        return response()->json(['status' => 'success'], 200);
    }

    public function updateLocation(Request $request) {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->state = $request->input('state');
        $user->suburb = $request->input('suburb');
        $user->save();
        return response()->json(['status' => 'success', 'result' => 'Update location successfully.'], 200);
    }

    public function getProfileReviews(Request $request) {
        $user_id = Auth::user()->id;

        $comments = DB::table('reviews')->select('reviews.*')->join('users', 'users.id', '=', 'reviews.receiver_id')->where('reviews.type', 1)->get();
        $complaints = DB::table('reviews')->select('reviews.*')->join('users', 'users.id', '=', 'reviews.receiver_id')->where('reviews.type', 2)->get();
        return response()->json(['status' => 'success', 'comments' => $comments, 'complaints' => $complaints], 200);
    }
}
