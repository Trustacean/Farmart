<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">

  <form action="{{ route('product.create') }}" method="POST">
    @csrf
    @method('POST')
    <div class="container mx-auto max-w-xl bg-background h-screen flex flex-col">
      <div class="p-4 flex justify-between items-center w-full bg-primary">
        <a href="{{ url()->previous() }} " class="">
          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.419556" y="0.5" width="45" height="45" rx="6" fill="#F3F3F3" />
            <path d="M15.8571 23.3916C15.8571 23.1108 15.9581 22.8525 16.1715 22.6504L25.0773 13.9355C25.2682 13.7446 25.5153 13.6436 25.8073 13.6436C26.3912 13.6436 26.8405 14.0815 26.8405 14.6655C26.8405 14.9463 26.7169 15.2046 26.5372 15.3955L18.3615 23.3916L26.5372 31.3877C26.7169 31.5786 26.8405 31.8257 26.8405 32.1177C26.8405 32.7017 26.3912 33.1396 25.8073 33.1396C25.5153 33.1396 25.2682 33.0386 25.0773 32.8364L16.1715 24.1328C15.9581 23.9194 15.8571 23.6724 15.8571 23.3916Z" fill="#020202" />
          </svg>
        </a>
      </div>

      <div class="text-center relative h-50 mb-4">
        <button class="focus:outline-none">
          <svg width="220" height="210" viewBox="0 0 262 230" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M131.085 133.098C105.147 133.098 84.125 154.739 84.125 181.432C84.125 208.128 105.147 229.771 131.085 229.771C157.023 229.771 178.047 208.128 178.047 181.432C178.047 154.739 157.023 133.098 131.085 133.098ZM157.538 187.162H137.129V208.709C137.129 212.167 134.36 214.981 131 214.981C127.64 214.981 124.871 212.17 124.871 208.709V187.162H104.547C101.187 187.162 98.4515 184.312 98.4515 180.853C98.4515 177.394 101.185 174.545 104.547 174.545H124.871V154.16C124.871 150.703 127.64 147.887 131 147.887C134.36 147.887 137.129 150.701 137.129 154.16V174.545H157.538C160.898 174.545 163.633 177.394 163.633 180.853C163.633 184.312 160.898 187.162 157.538 187.162Z" fill="black" />
            <path d="M251.558 0H10.6145C4.9819 0 0.25 5.16351 0.25 10.9615V170.917C0.25 176.717 4.9819 180.851 10.6145 180.851H71.8678C71.8678 147.204 98.4329 119.899 131.085 119.899C163.739 119.899 190.304 147.204 190.304 180.851H251.558C257.19 180.851 261.75 176.715 261.75 170.917V10.9615C261.75 5.16351 257.19 0 251.558 0ZM203.379 72.4536L164.748 112.228L105.946 51.7077C105.147 50.8852 103.858 50.8852 103.059 51.7077L65.762 90.0975L48.7354 72.5732C47.9385 71.7508 46.5708 71.7508 45.7738 72.5732L18.6359 100.431V18.9257H243.362V110.653L206.264 72.4536C205.465 71.6311 204.178 71.6311 203.379 72.4536Z" fill="black" />
          </svg>
        </button>
      </div>
      <div class="p-6 flex flex-col h-full">
        <input required type="text" class="w-full h-12 rounded-xl my-2 text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Nama Barang" id="product_name" name="product_name">
        <input required type="text" class="w-full h-24 rounded-xl my-2  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Deskripsi Barang" id="product_description" name="product_description">
        <input required type="number" class="w-full h-12 rounded-xl my-2  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Harga Jual" id="product_sell_price" name="product_sell_price">
        <input required type="number" class="w-full h-12 rounded-xl my-2  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Berat Barang" id="product_weight" name="product_weight">
        <input required type="number" class="w-full h-12 rounded-xl my-2  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Stok Barang" id="product_stock" name="product_stock">
        <select required class="w-full h-12 rounded-xl my-2  text-text_secondary text-md px-4 focus:outline-field_border" id="product_category" name="product_category">
          @foreach($categories as $category)
          <option value="{{ $category->category_id }}"> {{ $category->category_name }}</option>
          @endforeach
        </select>
      </div>
      <div class="fixed bottom-0 w-full bg-white p-3 flex justify-around max-w-xl">
        <div class="flex flex-row gap-4 justify-between items-center w-full h-full">
          <button type="submit" class="flex items-center justify-center bg-primary w-full h-12 rounded-xl text-background text-lg">Simpan Produk</button>
        </div>
      </div>
    </div>
  </form>

</body>

</html>