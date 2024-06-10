<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body class="bg-slate-900">
  <div class="bg-background h-screen flex flex-col">
    <a href="{{URL::previous()}}
    " class="border-b">
      <button class="p-4 flex items-center justify-start">
        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span class="text-lg font-bold text-secondary ml-2">Kembali </span>
      </button>
    </a>
    <div class="flex flex-col gap-2 p-4 overflow-y-auto flex-1">
      @foreach($cartItems as $item)
      <div class="p-4 bg-white shadow-md">
        <div class="flex items-center justify-between p-4 rounded-lg">
          <div class="flex items-center space-x-2">
            <!-- Menceklist semua item di toko -->
            <input type="checkbox" class="select-store form-checkbox">
            <label class="text-black font-bold">
              {{ $item['seller_name'] }}
            </label>
          </div>
          <form action="{{ route('cart.remove', $item['product_id'] ) }}" method="POST">
            @csrf
            <button type="submit" class="p-4 bg-primary rounded-lg">
              <img class="h-5" src="/icons/Trash.svg" alt="Trash">
            </button>
          </form>
        </div>
        <div class="mt-1 p-4 rounded-lg bg-background">
          <div class="flex items-center space-x-2">
            <!-- Menceklist per item -->
            <input type="checkbox" class="select-item form-checkbox" data-price="">
            <img src="" alt="Product" class="rounded-lg w-16 h-16">
            <div class="flex flex-col">
              <span>
                <span class="font-bold">
                  {{ $item['name'] }}
                </span>
              </span>
              <div class="flex items-center space-x-2">
                <span class="text-primary font-bold">
                  Rp{{ number_format($item['price'], 0, ',', '.') }}
                </span>
                <span class="text-secondary line-through">
                  Rp{{ number_format($item['price'], 0, ',', '.') }}
                </span>
              </div>
            </div>
          </div>
          <div class="mt-4 flex justify-end">
            <div class="flex items-center">
              <button class="bg-gray-300 text-black px-2 py-1 rounded-l-lg quantity-decrease">-</button>
              <span class="quantity-value text-center w-12"> {{ $item['quantity'] }}
              </span>
              <button class="bg-gray-300 text-black px-2 py-1 rounded-r-lg quantity-increase">+</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="bg-white shadow-md px-4 py-4 border-t bottom-0 left-0 right-0">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <!-- Menceklist semua toko(jika menceklist toko maka semua item pada toko terceklist) -->
          <input type="checkbox" id="select-all" class="form-checkbox text-primary">
          <label for="select-all" class="flex items-center cursor-pointer text-sm text-text_secondary ml-2">
            Pilih Semua</label>
        </div>
        <span id="total-price" class="text-lg font-bold text-primary">Total Rp0</span>
      </div>
      <button class="w-full py-2 mt-4 text-white bg-primary rounded-lg text-lg">Checkout</button>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const selectAllCheckbox = document.getElementById('select-all');
      const storeCheckboxes = document.querySelectorAll('.select-store');
      const itemCheckboxes = document.querySelectorAll('.select-item');
      const totalPriceElement = document.getElementById('total-price');
      const decreaseButtons = document.querySelectorAll('.quantity-decrease');
      const increaseButtons = document.querySelectorAll('.quantity-increase');
      const quantityValues = document.querySelectorAll('.quantity-value');

      const updateTotalPrice = () => {
        let totalPrice = 0;
        itemCheckboxes.forEach((checkbox, index) => {
          if (checkbox.checked) {
            const quantity = parseInt(quantityValues[index].textContent, 10);
            const price = parseFloat(checkbox.getAttribute('data-price'));
            totalPrice += price * quantity;
          }
        });
        totalPriceElement.textContent = `Total Rp${totalPrice.toLocaleString('id-ID')}`;
      };

      selectAllCheckbox.addEventListener('change', function() {
        const isChecked = selectAllCheckbox.checked;
        storeCheckboxes.forEach((storeCheckbox) => {
          storeCheckbox.checked = isChecked;
          const storeItems = storeCheckbox.closest('.p-4.bg-white.shadow-md').querySelectorAll('.select-item');
          storeItems.forEach(itemCheckbox => {
            itemCheckbox.checked = isChecked;
          });
        });
        updateTotalPrice();
      });

      storeCheckboxes.forEach(storeCheckbox => {
        storeCheckbox.addEventListener('change', function() {
          const isChecked = storeCheckbox.checked;
          const storeItems = storeCheckbox.closest('.p-4.bg-white.shadow-md').querySelectorAll('.select-item');
          storeItems.forEach(itemCheckbox => {
            itemCheckbox.checked = isChecked;
          });
          updateTotalPrice();
        });
      });

      itemCheckboxes.forEach(itemCheckbox => {
        itemCheckbox.addEventListener('change', function() {
          updateTotalPrice();
          const storeCheckbox = itemCheckbox.closest('.p-4.bg-white.shadow-md').querySelector('.select-store');
          const allItemsChecked = Array.from(itemCheckbox.closest('.p-4.bg-white.shadow-md').querySelectorAll('.select-item')).every(checkbox => checkbox.checked);
          storeCheckbox.checked = allItemsChecked;
        });
      });

      decreaseButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
          let value = parseInt(quantityValues[index].textContent, 10);
          if (value > 1) {
            quantityValues[index].textContent = value - 1;
            updateTotalPrice();
          }
        });
      });

      increaseButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
          let value = parseInt(quantityValues[index].textContent, 10);
          quantityValues[index].textContent = value + 1;
          updateTotalPrice();
        });
      });
    });
  </script>
</body>

</html>