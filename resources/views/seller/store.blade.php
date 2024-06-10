<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">

  <div class="container mx-auto max-w-xl bg-background h-screen flex flex-col">
    <div class="p-4 flex justify-between items-center w-full bg-primary">
      <a href="../" class="">
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="0.419556" y="0.5" width="45" height="45" rx="6" fill="#F3F3F3" />
          <path d="M15.8571 23.3916C15.8571 23.1108 15.9581 22.8525 16.1715 22.6504L25.0773 13.9355C25.2682 13.7446 25.5153 13.6436 25.8073 13.6436C26.3912 13.6436 26.8405 14.0815 26.8405 14.6655C26.8405 14.9463 26.7169 15.2046 26.5372 15.3955L18.3615 23.3916L26.5372 31.3877C26.7169 31.5786 26.8405 31.8257 26.8405 32.1177C26.8405 32.7017 26.3912 33.1396 25.8073 33.1396C25.5153 33.1396 25.2682 33.0386 25.0773 32.8364L16.1715 24.1328C15.9581 23.9194 15.8571 23.6724 15.8571 23.3916Z" fill="#020202" />
        </svg>
      </a>
      <input type="text" placeholder="Search" class="w-3/4 p-2 rounded border border-text_secondary">
      <button class="bg-background text-text_primary p-2 rounded">Search</button>
    </div>
    <div class="h-full overflow-y-auto flex-grow">
      <div class="p-4">
        <h1 class="text-2xl font-bold">Produk {{ $seller->store_name }}</h1>
        <div class="grid grid-cols-2 gap-4 mt-4">
          @foreach($products as $product)
          <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="relative">
            <img src='{{ $product->product_picture }}' alt="Product" class="w-full h-48 object-cover rounded-lg">
            </div>
            <div class="mt-4">
              <h2 class="text-lg font-bold">{{ $product->product_name }}</h2>
              <p class="text-sm text-text_secondary">Rp. {{ number_format($product->product_sell_price, 0, ',', '.') }}</p>
              <p class="text-sm text-text_secondary">Stock: {{ $product->product_stock }}</p>
            </div>
            <div class="mt-4 flex justify-between items-center">
              <a href="/product/edit/{{ $product->product_id }}" class="bg-primary text-white p-2 rounded">Edit</a>
              <a href="/product/delete/{{ $product->product_id }}" class="bg-red-500 text-white p-2 rounded">Delete</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="fixed bottom-0 w-full bg-white p-3 flex justify-around max-w-xl">
      <div class="flex flex-col justify-between items-center w-full h-full">
        <a href="{{ route('product.create') }}" class="flex items-center justify-center bg-primary w-full h-12 rounded-xl border-2 text-white text-lg">Tambah Produk</a>
      </div>
    </div>
  </div>

</body>

</html>