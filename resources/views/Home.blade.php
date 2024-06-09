<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="bg-white p-4 flex justify-between items-center">
        <input type="text" placeholder="Search" class="w-3/4 p-2 border rounded">
        <div class="flex space-x-4">
            <button class="focus:outline-none"><img src="{{ asset('images/cart_icon.png') }}" alt="Cart" class="w-6 h-6"></button>
            <button class="focus:outline-none"><img src="{{ asset('images/menu_icon.png') }}" alt="Menu" class="w-6 h-6"></button>
        </div>
    </div>
    <div class="text-center relative h-40">
        <img src="{{ asset('images/banner_image.png') }}" alt="Banner" class="object-cover w-full h-full absolute inset-0">
        <h1 class="text-white text-4xl font-bold relative z-10">FARMART</h1>
        <div class="mt-2 space-x-2 relative z-10">
            <span class="inline-block w-2.5 h-2.5 bg-white rounded-full"></span>
            <span class="inline-block w-2.5 h-2.5 bg-white rounded-full"></span>
            <span class="inline-block w-2.5 h-2.5 bg-white rounded-full"></span>
        </div>
    </div>
    <div class="flex flex-wrap justify-around bg-white p-4">
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/nutri_tanaman.png') }}" alt="Nutri Tanaman" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Nutri Tanaman</div>
        </div>
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/bibit_beni.png') }}" alt="Bibit & Beni" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Bibit & Beni</div>
        </div>
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/proteksi_pertanian.png') }}" alt="Proteksi Tanaman" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Proteksi Tanaman</div>
        </div>
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/peralatan_pertanian.png') }}" alt="Peralatan Pertanian" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Peralatan Pertanian</div>
        </div>
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/teknologi_pertanian.png') }}" alt="Teknologi & Inovasi Pertanian" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Teknologi & Inovasi Pertanian</div>
        </div>
        <div class="w-5/12 relative h-28 bg-gray-300 rounded-lg p-4 m-2">
            <img src="{{ asset('images/produk_peternakan.png') }}" alt="Produk Peternakan" class="object-cover w-full h-full absolute inset-0 rounded-lg">
            <div class="relative z-10 text-white font-bold">Produk Peternakan</div>
        </div>
    </div>
    <div class="flex justify-around bg-white p-4">
        <button class="flex-1 bg-gray-300 p-2 m-1 rounded-lg">Rekomendasi</button>
        <button class="flex-1 bg-gray-300 p-2 m-1 rounded-lg">Produk Baru</button>
        <button class="flex-1 bg-gray-300 p-2 m-1 rounded-lg">Promo & Diskon</button>
        <button class="flex-1 bg-gray-300 p-2 m-1 rounded-lg">Produk</button>
    </div>
    <div class="bg-white p-4">
        <div class="flex bg-gray-200 rounded-lg p-4 mb-4">
            <img src="{{ asset('images/daging_segar.png') }}" alt="Daging Segar" class="w-24 h-24 rounded-lg mr-4">
            <div>
                <h3 class="font-bold">Daging Segar Pak Rahmat 500g</h3>
                <p class="text-green-600 font-bold">Rp50,000</p>
                <p class="text-gray-600">Rating 4.9 &#9733; 231 Terjual</p>
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 w-full bg-white p-4 flex justify-around">
        <button class="focus:outline-none"><img src="{{ asset('images/home.png') }}" alt="Home" class="w-6 h-6"></button>
        <button class="focus:outline-none"><img src="{{ asset('images/Bookmark.png') }}" alt="Keranjang" class="w-6 h-6"></button>
        <button class="focus:outline-none"><img src="{{ asset('images/profile.png') }}" alt="Profile" class="w-6 h-6"></button>
    </div>
</body>
</html>
