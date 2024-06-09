<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Data dummy
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
}
