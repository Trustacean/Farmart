<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">
  <div class="container mx-auto max-w-xl bg-background h-screen max-h-max">
    <div class="flex flex-col justify-between pt-2 pb-10 px-8 min-h-full bg-background h-max relative">
      <div class="w-full">
        <div class="h-14 w-full">
          <div class="w-[100%] flex flex-row justify-between items-start gap-2 ">
            <a href="{{ URL::previous() }}" class="px-4 w-[50px] h-12  bg-neutral-200/80 shadow-lg rounded-xl flex items-center  border">
              <img src="/icons/Chevron-left.svg" alt="" class="w-[30px]">
            </a>
            <div class="flex flex-row justify-between items-end gap-2">
              <a href="{{ route('cart') }}" class="px-4 w-[50px] h-12  bg-primary rounded-xl flex items-center mx-auto shadow-lg ">
                <img src="/icons/keranjang.svg" alt="" class="w-[30px]">
              </a>
              <button class="px-4 w-[50px] h-12  bg-primary rounded-xl flex items-center mx-auto shadow-lg ">
                <img src="/icons/search.svg" alt="" class="w-[30px]">
              </button>
            </div>
          </div>
        </div>
        <div class="">
          <div class="flex flex-col gap-3 justify-start mb-[50px]">
            <div class=" flex flex-col gap-2 mt-5 rounded-lg ">
              <div class="flex flex-col gap-2">
                <img class="w-full h-[400px] object-cover rounded-lg shadow-lg" src="{{ asset('storage/product_images/' . $product->product_image) }}" alt="">
                <div class="flex flex-row gap-2 items-start justify-normal">
                  <img class="w-[60px] h-[60px] object-cover rounded-lg shadow-lg" src="{{ asset('storage/product_images/' . $product->product_image) }}" alt="">
                  <img class="w-[60px] h-[60px] object-cover rounded-lg shadow-lg" src="{{ asset('storage/product_images/' . $product->product_image) }}" alt="">
                </div>
                <div id="price" class="flex flex-row gap-2 items-center justify-normal">
                  <div class="">
                    <strong class="text-xl text-primary"> Rp. {{ number_format($product->product_sell_price, 0, ',', '.') }}</strong>
                  </div>
                  <div class="">
                    <p class="text-sm text-foreground line-through text-text_secondary">Rp. {{ number_format($product->product_sell_price, 0, ',', '.') }}</p>
                  </div>
                </div>
                <div id="name" class="flex flex-row gap-2 items-center justify-normal">
                  <div class="">
                    <strong class="text-lg text-text_secondary ">{{ $product->product_name }}</strong>
                  </div>
                </div>
                <div class="w-full justify-between  flex flex-row  items-center">
                  <div id="name" class="flex flex-row gap-2 items-center justify-normal">
                    <div id="rating" class=" rounded border border-primary text-primary flex flex-row items-center justify-normal">
                      <img src="/icons/bintang.svg" class="w-[15px] h-[15px] rounded-full mx-2" alt="">
                      <p class="p-2 text-xs">Rating 4.8</p>
                    </div>
                    <div id="rating" class=" rounded border border-primary text-primary">
                      <p class="p-2 text-xs">Image</p>
                    </div>
                  </div>
                  <p class="text-xs font-semibold">Terjual 231</p>
                </div>
              </div>
            </div>
            <div class="border w-full border-black/20 my-2"></div>
            <div class="bg-white p-4">
              <p> Berat : {{ $product->product_weight }} gram</p>
              <p> Stok : {{ $product->product_stock }}</p>
              <p> Kategori : {{ $category->category_name }}</p>
              <br>
              {{ $product->product_description }}
            </div>
            <div class="card bg-white flex flex-row gap-2 px-2 py-5 mt-1 rounded-lg shadow-lg items-start justify-normal">
              <img src="/assets/sapi.png" class="w-[60px] h-[60px] rounded-full" alt="">
              <div class="flex flex-col w-full">
                <strong class="text-sm font-bold">{{ $seller->store_name }}</strong>
                <div class="flex flex-row w-full justify-between px-2">
                  <div class="flex flex-col w-full justify-normal">
                    <div class="flex flex-row gap-1 items-center justify-normal">
                      <div class="w-[8px] h-[8px] bg-primary rounded-full"></div>
                      <p class="text-sm">online</p>
                    </div>
                    <p class="text-xs">{{ $district->nama }}, {{ $city->nama }}</p>
                  </div>
                  <div class="flex flex-col gap-1 items-end text-right justify-normal w-full">
                    <p class="text-xs">Rating 4.9</p>
                    <button class="text-xs px-2 bg-primary rounded-md py-1 text-white">Ikuti</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="border w-full border-black/20 my-2"></div>
            <div class="flex flex-col gap-2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <form id="add-to-cart-form" action="{{ route('cart/add', $product->product_id) }}" method="POST">
        @csrf
        <div class="w-full h-[80px] flex flex-row px-2 py-2 gap-2 absolute bottom-0 left-0 bg-neutral-300">
          <button type="button" id="add-to-cart-button" class="h-[50px] w-full bg-white rounded-lg px-2 border-primary text-primary border">
            <p class="font-semibold">Masukan Keranjang</p>
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Pop-up "Berhasil ditambahkan" -->
  <div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-5 rounded-lg shadow-lg">
      <p>Berhasil ditambahkan</p>
    </div>
  </div>

  <script>
  document.getElementById('add-to-cart-button').addEventListener('click', function() {
    const form = document.getElementById('add-to-cart-form');
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Show the pop-up immediately
        document.getElementById('popup').classList.remove('hidden');
        // Hide the pop-up after 1 second
        setTimeout(function() {
          document.getElementById('popup').classList.add('hidden');
        }, 400);
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });
</script>

</body>

</html>
