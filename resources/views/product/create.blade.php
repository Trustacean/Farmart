<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">

  <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
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

      <div class="flex justify-center text-center relative h-50 mb-4 mt-8">
        <div class="text-center relative h-50 mb-4 mt-8">
          <button class="focus:outline-none">
            <input type="file" id="product_image" name="product_image" class="fort-control">
          </button>
          <img class="object-cover h-60 w-60 border-2 border-text_secondary" id="preview" alt="product" />
        </div>
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
  <script>
    document.getElementById('product_image').addEventListener('change', function(e) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('preview').src = e.target.result;
      }
      reader.readAsDataURL(e.target.files[0]);
    });
  </script>

</body>

</html>