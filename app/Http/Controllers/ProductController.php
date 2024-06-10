<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
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
}
