<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Data dummy untuk halaman cart
        $cartItems = [
            [
                'toko' => 'Daging Segar Pak Rahmat',
                'items' => [
                    [
                        'nama' => 'Daging Sapi Berkualitas',
                        'price' => 60000,
                        'old_price' => 80000,
                        'image' => 'images/image 64.png',
                    ],
                    [
                        'nama' => 'Daging Ayam Segar',
                        'price' => 40000,
                        'old_price' => 50000,
                        'image' => 'images/image 64.png',
                    ]
                ]
            ],
            [
                'toko' => 'Peternakan Bu Aminah',
                'items' => [
                    [
                        'nama' => 'Ayam Kampung Organik',
                        'price' => 45000,
                        'old_price' => 60000,
                        'image' => 'images/image66.png',
                    ],
                    [
                        'nama' => 'Telur Bebek Segar',
                        'price' => 25000,
                        'old_price' => 30000,
                        'image' => 'images/image 67.png',
                    ]
                ]
            ],
            [
                'toko' => 'Kebun Pak Budi',
                'items' => [
                    [
                        'nama' => 'Sayuran Hijau Segar',
                        'price' => 30000,
                        'old_price' => 40000,
                        'image' => 'images/image68.png',
                    ],
                    [
                        'nama' => 'Buah Apel Merah',
                        'price' => 50000,
                        'old_price' => 60000,
                        'image' => 'images/image69.png',
                    ]
                ]
            ]
        ];

        return view('cart', compact('cartItems'));
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
