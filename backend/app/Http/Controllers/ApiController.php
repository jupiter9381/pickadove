<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegisterAuthRequest;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestEmail;
use App\Mail\PasswordEmail;

use DB;

class ApiController extends Controller
{
    public $loginAfterSignUp = true;

    public function register(Request $request)
    {
        $code = rand(10000, 999999);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->usertype = $request->input('usertype');
        $user->email = $request->email;
        $user->verification_code = $code;
        $user->password = bcrypt($request->password);
        $user->save();

        // if ($this->loginAfterSignUp) {
        //     return $this->login($request);
        // }

        $data = ['code' => $code];
        Mail::to($request->email)->send(new TestEmail($data));
        
        return response()->json([
            'success' => true,
            'type' => 'signup',
            'user' => $user,
            'password' => bcrypt($request->password)
        ], 200);
    }

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;

        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'type' => 'signin',
            'success' => true,
            'token' => $jwt_token,
        ]);
    }

    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }

    public function getAuthUser(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);

        $user = JWTAuth::authenticate($request->token);

        return response()->json(['user' => $user]);
    }

    public function checkVerification(Request $request) {
        $code = $request->input('code');
        $user = User::where('verification_code', $code)->first();
        if($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'success' => false
            ], 200);
        }
    }

    public function passwordRecovery(Request $request) {
        $email = $request->input('email');

        $data = ['email' => $email];
        
        Mail::to($request->email)->send(new PasswordEmail($data));
        return response()->json([
            'success' => true,
            'message' => "Email sent successfully"
        ], 200);
    }

    public function resetPassword(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        DB::table('users')
            ->where('email', $email)
            ->update(['password' => bcrypt($password)]);
        return response()->json([
            'success' => true,
            'message' => "Update password successfully."
        ], 200);
    }
}
