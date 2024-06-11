<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Zipcode;
use App\Models\District;
use App\Models\City;
use Illuminate\Http\Request;



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

        $category = Category::where('category_id', $product->category_id)->first();

        return view('product/detail', ['product' => $product, 'seller' => $seller, 'district' => $district, 'city' => $city, 'category' => $category]);
    }

    public function showProductEdit($productId)
    {
        $user = User::where('user_id', session('user_id'))->first();

        if (!$user) {
            return redirect('/home');
        }

        $seller = Seller::where('user_id', $user->user_id)->first();

        if (!$seller) {
            return redirect('/home');
        }

        if ($seller->seller_id != Product::where('product_id', $productId)->first()->seller_id) {
            return redirect('/home');
        }

        $product = Product::where('product_id', $productId)->first();
        $categories = Category::all();
        return view('product/edit', ['product' => $product, 'categories' => $categories]);
    }

    public function showProductCreate()
    {
        $categories = Category::all();
        return view('product/create', ['categories' => $categories]);
    }

    public function storeProduct(Request $request)
    {
        $user = User::where('user_id', session('user_id'))->first();
        $seller = Seller::where('user_id', $user->user_id)->first();

        $product = new Product();
        $product->product_id = uniqid();
        $product->seller_id = $seller->seller_id;
        $product->product_name = request('product_name');
        $product->product_sell_price = request('product_sell_price');
        $product->product_weight = request('product_weight');
        $product->product_stock = request('product_stock');
        $product->product_description = request('product_description');
        $product->category_id = request('product_category');

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/product_images'), $filename);
            $product->product_image = $filename;
        } else {
            $product->product_image = 'default.jpg';
        }
        $product->save();

        return redirect('/seller/store');
    }

    public function updateProduct($product_id, Request $request)
    {
        $product = Product::where('product_id', $product_id)->first();
        $product->product_name = request('product_name');
        $product->product_sell_price = request('product_sell_price');
        $product->product_weight = request('product_weight');
        $product->product_stock = request('product_stock');
        $product->product_description = request('product_description');
        $product->category_id = request('product_category');

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/product_images'), $filename);
            $product->product_image = $filename;
        } else {
            $product->product_image = 'default.jpg';
        }
        $product->save();

        return redirect('/seller/store');
    }

    public function deleteProduct($product_id)
    {
        $user = User::where('user_id', session('user_id'))->first();

        if (!$user) {
            return redirect('/home');
        }

        $seller = Seller::where('user_id', $user->user_id)->first();

        if (!$seller) {
            return redirect('/home');
        }

        if ($seller->seller_id != Product::where('product_id', $product_id)->first()->seller_id) {
            return redirect('/home');
        }

        $product = Product::where('product_id', $product_id)->first();
        $product->delete();

        return redirect('/seller/store');
    }
}
