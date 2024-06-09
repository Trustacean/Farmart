<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="h-screen flex flex-col justify-between">
        <div class="p-4 border-b">
            <a href="javascript:history.back()" class="flex items-center text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="ml-2 text-lg font-bold">Pembayaran</span>
            </a>
        </div>
        <div class="p-4 flex-1 overflow-y-auto">
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="flex items-center">
                    <img src="{{ asset($checkoutData['product']['image']) }}" alt="Product" class="rounded-lg w-16 h-16 mr-4">
                    <div>
                        <h3 class="font-bold">{{ $checkoutData['product']['name'] }}</h3>
                        <p class="text-gray-500">{{ $checkoutData['product']['store'] }}</p>
                        <p class="text-primary font-bold">Rp{{ number_format($checkoutData['product']['price'], 0, ',', '.') }} <span class="text-gray-500 text-sm">x{{ $checkoutData['product']['quantity'] }}</span></p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <h3 class="font-bold mb-2">Alamat Tujuan</h3>
                <p class="text-gray-700">{{ $checkoutData['address'] }}</p>
                <a href="#" class="text-primary font-bold">Ubah</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <h3 class="font-bold mb-2">Metode Pembayaran</h3>
                <div class="flex items-center mb-2">
                    <img src="/icons/Qris.svg" alt="QRIS" class="w-16 h-16 mr-4">
                    <div>
                        <p class="text-gray-700 font-bold">Rekomendasi</p>
                        <p class="text-gray-500 text-sm">Pembayaran mudah dan cepat menggunakan kode QR universal.</p>
                        <a href="#" class="text-primary font-bold">Selengkapnya</a>
                    </div>
                </div>
                <a href="#" class="text-primary font-bold">Ubah</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="font-bold mb-2">Detail Pembayaran</h3>
                <div class="flex justify-between mb-2">
                    <span>Metode Pembayaran</span>
                    <span class="font-bold">{{ $checkoutData['payment_method'] }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Total Pesanan</span>
                    <span class="font-bold">Rp{{ number_format($checkoutData['total_order'], 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Biaya Admin <img class="inline-block h-4" src="icons\Information icon.svg" alt=""></span>
                    <span class="font-bold">Rp{{ number_format($checkoutData['admin_fee'], 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Total Pembayaran</span>
                    <span class="font-bold text-primary">Rp{{ number_format($checkoutData['total_payment'], 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
        <div class="p-4">
            <button class="w-full py-2 text-white bg-primary rounded-lg text-lg">Bayar Sekarang</button>
        </div>
    </div>
</body>

</html>
