<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use App\Models\Zipcode;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;

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
        $products = Product::all();
        if (!session()->has('user_id')) {
            return view('home', ['products' => $products]);
        }
        $user = User::where('user_id', session('user_id'))->first();
        return view('home', ['user' => $user], ['products' => $products]);
    }

    public function showCategorizedPage($category)
    {
        $products = Product::where('category_id', $category)->get();

        return view('search', ['products' => $products]);
    }

    public function showProfilePage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $user = User::where('user_id', session('user_id'))->first();
        $isSeller = Seller::where('user_id', $user->user_id)->exists();

        $zipcode = $user->user_postal_code;
        if (!$zipcode) {
            return view('profile/profile', ['user' => $user, 'address' => null, 'isSeller' => $isSeller]);
        }

        $district = Zipcode::where('kodepos', $zipcode)->first();
        $city = City::where('id', $district->d_kabkota_id)->first();
        $province = Province::where('id', $city->d_provinsi_id)->first();

        $address = $province->nama . ', ' . $city->nama . ', ' . $district->nama;
        return view('profile/profile', ['user' => $user ,'address' => $address, 'isSeller' => $isSeller]);
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
        $user->save();
        return redirect('/login');
    }

    public function storeAddress(Request $request)
    {
        $user = User::where('user_id', session('user_id'))->first();
        $user->user_postal_code = $request->zip_code;
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
