<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{

    public function addCart($productId)
    {
        $user = User::where('user_id', session('user_id'))->first();
        $cart = Cart::where('user_id', $user->user_id)
            ->where('product_id', $productId)
            ->first();

        if ($cart) {
            // Update the existing cart item
            Cart::where('user_id', $user->user_id)
                ->where('product_id', $productId)
                ->update(['quantity' => $cart->quantity + 1]);
        } else {
            // Create a new cart item
            Cart::create([
                'user_id' => $user->user_id,
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }
        return redirect('/cart');
    }

    public function removeCart($productId)
    {
        $user = User::where('user_id', session('user_id'))->first();


        Cart::where('user_id', $user->user_id)
            ->where('product_id', $productId)
            ->delete();
            
        return redirect('/cart');
    }

    public function index()
    {
        $user = User::where('user_id', session('user_id'))->first();
        $carts = Cart::where('user_id', $user->user_id)->get();
        $cartItems = [];

        foreach ($carts as $cart) {
            $product = Product::where('product_id', $cart->product_id)->first();
            $cartItems[] = [
                'product_id' => $product->product_id,
                'seller_name' => Seller::where('seller_id', $product->seller_id)->first()->store_name,
                'name' => $product->product_name,
                'price' => $product->product_sell_price,
                'quantity' => $cart->quantity
            ];
        }

        return view('cart', ['cartItems' => $cartItems, 'user' => $user]);
    }

    // Dummy data untuk halaman checkout
    public function checkout()
    {
        $checkoutData = [
            'product' => [
                'name' => 'Daging Segar Pak Rahmat 500g | Daging Sapi Berkualitas',
                'store' => 'Peternakan Pak Rahmat',
                'price' => 60000,
                'quantity' => 1,
                'image' => 'images/image 64.png',
            ],
            'address' => 'Jl. Raya Tajem No.32, Tajem, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
            'payment_method' => 'QRIS - QR CODE',
            'total_order' => 60000,
            'admin_fee' => 3500,
            'total_payment' => 63500,
        ];

        return view('checkout', compact('checkoutData'));
    }

    // Dummy data untuk halaman pembayaran QR
    public function paymentQr()
    {
        $paymentData = [
            'order_id' => '696969696969',
            'payment_deadline' => '00:59:54',
            'qr_code' => 'images/QRcode.png',
            'total_payment' => 63500,
        ];

        return view('payment_qr', compact('paymentData'));
    }
}
