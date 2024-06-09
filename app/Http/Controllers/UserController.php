<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->user_id = uniqid();
        $user->user_phone = $request->user_phone;
        $user->user_password = Hash::make($request->user_password);
        $user->user_name = $request->user_name;
        $user->user_postal_code = 0;
        $user->save();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $session = $request->session();
        $user = User::where('user_phone', $request->user_phone)->first();
        if (!$user || !Hash::check($request->user_password, $user->user_password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        return redirect('/home')->with('user', $user);
    }
}
