<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{

    public function showOnboardPage()
    {
        if (session()->has('user_id')) {
            return redirect('/home');
        }
        return view('onboard');
    }

    public function showRegisterPage()
    {
        return view('register');
    }

    public function showLoginPage()
    {
        if (session()->has('user_id')) {
            return redirect('/home');
        }
        return view('login');
    }

    public function showHomePage()
    {
        if (!session()->has('user_id')) {
            return view('home');
        }
        $user = User::where('user_id', session('user_id'))->first();
        return view('home', ['user' => $user]);
    }

    public function showProfilePage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $user = User::where('user_id', session('user_id'))->first();
        return view('profile/profile', ['user' => $user]);
    }

    public function showSellerRegisterPage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        return view('seller/register');
    }

    public function showEditAddressPage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        $user = User::where('user_id', session('user_id'))->first();
        return view('profile/address', ['user' => $user]);
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect('/login');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->user_id = uniqid();
        $user->user_phone = $request->user_phone;
        $user->user_password = Hash::make($request->user_password);
        $user->user_name = $request->user_name;
        $user->user_postal_code = 0;
        $user->user_address = '';
        $user->user_address_detail = '';
        $user->save();
        return redirect('/login');
    }

    public function storeAddress(Request $request)
    {
        $user = User::where('user_id', session('user_id'))->first();
        $user->user_postal_code = $request->zip_code;
        $user->user_address = $request->subdistrict . ', ' . $request->district . ', ' . $request->city . ', ' . $request->province;
        $user->user_address_detail = $request->user_address_detail;
        $user->save();
        return redirect('/profile');
    }

    public function login(Request $request)
    {
        $user = User::where('user_phone', $request->user_phone)->first();
        if (!$user || !Hash::check($request->user_password, $user->user_password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        } else {
            session(['user_id' => $user->user_id]);
            return redirect('/home');
        }
    }
}
