<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran QR</title>
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
            <div class="bg-white p-4 rounded-lg shadow-md mb-4 text-center">
                <div class="flex justify-between mb-2">
                    <span>ID Pesanan</span>
                    <span class="font-bold">#{{ $paymentData['order_id'] }}</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span>Batas Waktu Pembayaran</span>
                    <span class="font-bold text-red-500">{{ $paymentData['payment_deadline'] }}</span>
                </div>
                <div class="flex justify-center mb-4">
                    <img src="{{ asset($paymentData['qr_code']) }}" alt="QR Code" class="w-48 h-48">
                </div>
                <h3 class="font-bold mb-2">Pindai QR</h3>
                <div class="flex justify-between items-center mb-4">
                    <p class="text-xl font-bold">Total <span class="text-primary">Rp{{ number_format($paymentData['total_payment'], 0, ',', '.') }}</span></p>
                    <div class="flex items-center">
                        <a href="#" class="text-primary font-md">Cara Bayar</a>
                        <img class="inline-block h-4 px-2" src="icons/Information icon.svg" alt="">
                    </div>
                </div>
                <div class="flex justify-center gap-4 mb-4">
                    <button class="w-40 py-2 border border-primary text-primary rounded-lg">Batalkan Pesanan</button>
                    <button class="w-40 py-2 bg-primary text-white rounded-lg">Bayar lewat GOPAY</button>
                </div>
            </div>
        </div>
        <div class="p-4">
            <button class="w-full py-2 border border-primary text-primary rounded-lg">Kembali</button>
        </div>
    </div>
</body>

</html>
