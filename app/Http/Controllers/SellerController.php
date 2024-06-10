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

        $products = new Product();
        $products->product_id = uniqid('product');
        $products->seller_id = $seller->seller_id; // This returns 0, WHY?
        $products->product_name = 'Product 2';
        $products->product_sell_price = 10000;
        $products->product_weight = 100;
        $products->product_stock = 10;
        $products->product_description = 'Description 1';
        $products->category_id = 5;
        $products->save();

        $products = new Product();
        $products->product_id = uniqid('product');
        $products->seller_id = $seller->seller_id;
        $products->product_name = 'Product 4';
        $products->product_sell_price = 20000;
        $products->product_weight = 100;
        $products->product_stock = 20;
        $products->product_description = 'Description 2';
        $products->category_id = 6;
        $products->save();

        $products = new Product();
        $products->product_id = uniqid('product');
        $products->seller_id = $seller->seller_id;
        $products->product_name = 'Product 5';
        $products->product_sell_price = 30000;
        $products->product_weight = 100;
        $products->product_stock = 30;
        $products->product_description = 'Description 3';
        $products->category_id = 2;
        $products->save();

        $products = new Product();
        $products->product_id = uniqid('product');
        $products->seller_id = $seller->seller_id;
        $products->product_name = 'Product 6';
        $products->product_sell_price = 40000;
        $products->product_weight = 100;
        $products->product_stock = 40;
        $products->product_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $products->category_id = 1;
        $products->save();

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

        return view('seller/store', ['user' => $user->user_id, 'seller' => $user->user_id, 'products' => $products]);
    }
}
