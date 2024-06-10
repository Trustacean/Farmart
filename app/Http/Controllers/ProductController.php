<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Zipcode;
use App\Models\District;
use App\Models\City;

class ProductController extends Controller
{
    public function showProductDetail($productId)
    {
        $product = Product::where('product_id', $productId)->first();
        $seller = Seller::where('seller_id', $product->seller_id)->first();
        $zipcode = $seller->seller_postal_code;
        $temp = Zipcode::where('kodepos', $zipcode)->first();
        $district = District::where('id', $temp->d_kecamatan_id)->first();
        $city = City::where('id', $temp->d_kabkota_id)->first();

        return view('product/detail', ['product' => $product, 'seller' => $seller, 'district' => $district, 'city' => $city]);
    }

    public function showProductEdit($productId)
    {
        $user = User::where('user_id', session('user_id'))->first();

        $seller = Seller::where('user_id', $user->user_id)->first();

        if (!$seller) {
            return redirect('/seller/register');
        }

        if ($seller->seller_id != Product::where('product_id', $productId)->first()->seller_id) {
            return redirect('/home');
        }

        $product = Product::where('product_id', $productId)->first();
        $categories = Category::all();
        return view('product/edit', ['product' => $product, 'categories' => $categories]);
    }
}
