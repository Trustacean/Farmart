<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use App\Models\Province;
use App\Models\City;
use App\Models\Zipcode;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function showSellerRegisterPage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        $user = User::where('user_id', session('user_id'))->first();

        $zipcode = $user->user_postal_code;
        if (!$zipcode) {
            return view('seller/register', ['user' => $user, 'address' => null]);
        }
        $district = Zipcode::where('kodepos', $zipcode)->first();
        $city = City::where('id', $district->d_kabkota_id)->first();
        $province = Province::where('id', $city->d_provinsi_id)->first();

        $address = $province->nama . ', ' . $city->nama . ', ' . $district->nama;
        return view('seller/register', ['user' => $user, 'address' => $address]);
    }

    public function storeSeller(Request $request)
    {
        $user = User::where('user_id', session('user_id'))->first();

        $seller = $user->seller;
        if ($seller) {
            return redirect('/home');
        }

        $seller = new Seller();
        $seller->seller_id = uniqid();
        $seller->user_id = $user->user_id;
        $seller->store_name = $request->store_name;
        $seller->seller_phone = $user->user_phone;
        $seller->seller_postal_code = $user->user_postal_code;
        $seller->seller_address_detail = $user->user_address_detail;
        $seller->save();

        return redirect('/home');
    }

    public function showStorePage()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }
        $user = User::where('user_id', session('user_id'))->first();
        $isSeller = Seller::where('user_id', $user->user_id)->exists();
        if (!$isSeller) {
            return redirect('/seller/register');
        }

        $seller = Seller::where('user_id', $user->user_id)->first();

        $products = Product::where('seller_id', $seller->seller_id)->get();

        return view('seller/store', ['user' => $user->user_id, 'seller' => $seller, 'products' => $products]);
    }
}
