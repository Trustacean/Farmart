<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesanan</title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-400">
    <div class="container mx-auto max-w-xl bg-white min-h-screen p-4 rounded-lg">
  <!-- Header -->
  <!-- <header class="bg-white shadow p-4"> -->
    <h1 class="text-xl font-semibold">Pesanan</h1>
  <!-- </header> -->

  <!-- Content -->
  <main class="flex-grow p-4">
    <div class="flex space-x-2 mb-4">
      <button class="bg-green-500 text-white px-4 py-2 rounded-md ">Pesanan Saya</button>
      <button class="border border-green-500 text-green-500 px-4 py-2 rounded-md">Pesanan Selesai</button>
    </div>

    <div class="flex justify-between items-center mb-4">
  <div class="flex items-center">
    <h2 class="font-semibold">Peternakan Pak Rahmat</h2>
    <svg class="ml-2 w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
  </div>
  <span class="text-green-500">Diproses</span>
</div>

      <div class="flex items-center">
        <img src="{{ asset('images/daging_segar.png') }}" alt="Product Image" class="w-16 h-16 rounded-md mr-4">
        <div class="flex-grow">
          <h3 class="font-medium">Daging Segar Pak Rahmat 500g |</h3>
          <h4 class="font-medium">Daging Sapi Berkualitas</h4>
          
          <div class="flex items-center text-green-500 font-bold">
            <span>Rp60,000</span>
            <span class="text-gray-500 line-through ml-2">Rp80,000</span>
            <span class="ml-2 text-black">x1</span>
          </div>
        </div>
      </div>
      <div class="mt-4 flex justify-end">
    <button class="border border-green-500 text-green-500 px-4 py-2 rounded-md">Batalkan Pesanan</button>
    </div>

    </div>
  </main>
  <div class="fixed bottom-0 left-0 right-0 bg-white p-3 flex justify-around max-w-xl mx-auto">
      <button class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.6315 9.4887C20.1566 9.4887 19.5276 9.47818 18.7444 9.47818C16.8343 9.47818 15.2637 7.89727 15.2637 5.96926V2.58655C15.2637 2.32044 15.0513 2.10376 14.7878 2.10376H9.22418C6.62776 2.10376 4.52917 4.23478 4.52917 6.84649V18.18C4.52917 20.9201 6.72774 23.1405 9.44081 23.1405H17.7258C20.3128 23.1405 22.4104 21.0231 22.4104 18.4093V9.96203C22.4104 9.69486 22.199 9.47923 21.9344 9.48028C21.4897 9.48344 20.9565 9.4887 20.6315 9.4887Z" fill="#34A853" />
          <path d="M17.7655 2.7005C17.451 2.37338 16.9019 2.59847 16.9019 3.05181V5.82551C16.9019 6.98884 17.8601 7.94601 19.0235 7.94601C19.7566 7.95442 20.7748 7.95653 21.6394 7.95442C22.0822 7.95337 22.3073 7.4243 22.0002 7.10454C20.8905 5.95067 18.9036 3.88276 17.7655 2.7005Z" fill="#34A853" />
        </svg>
      </button>
      <button class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.99066 21.85V18.6338C9.99066 17.8128 10.6611 17.1472 11.4881 17.1472H14.5113C14.9084 17.1472 15.2893 17.3038 15.5701 17.5826C15.851 17.8614 16.0087 18.2395 16.0087 18.6338V21.85C16.0062 22.1913 16.141 22.5195 16.3833 22.7618C16.6255 23.004 16.9552 23.1402 17.299 23.1402H19.3615C20.3248 23.1427 21.2495 22.7646 21.9315 22.0892C22.6135 21.4139 22.9968 20.4969 22.9968 19.5407V10.3782C22.9968 9.60569 22.6519 8.87296 22.055 8.37737L15.0387 2.81442C13.8182 1.83904 12.0694 1.87054 10.8854 2.88921L4.0291 8.37737C3.40402 8.85836 3.03043 9.59326 3.01196 10.3782V19.5313C3.01196 21.5245 4.63955 23.1402 6.64729 23.1402H8.66273C9.37686 23.1402 9.95723 22.5683 9.96241 21.8593L9.99066 21.85Z" fill="#1E1E1E" />
        </svg>
      </button>
      <button class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.70169 21.2472C5.70169 17.6456 8.62141 14.7258 12.2231 14.7258H14.9578C18.5595 14.7258 21.4792 17.6456 21.4792 21.2472C21.4792 21.7119 21.1025 22.0887 20.6378 22.0887H6.54316C6.07843 22.0887 5.70169 21.7119 5.70169 21.2472Z" fill="#34A853" />
          <path d="M13.7277 12.8966C16.4317 12.8966 18.5983 10.7291 18.5983 8.02604C18.5983 5.32296 16.4317 3.15552 13.7277 3.15552C11.0246 3.15552 8.85721 5.32296 8.85721 8.02604C8.85721 10.7291 11.0246 12.8966 13.7277 12.8966Z" fill="#34A853" />
        </svg>
      </button>
    </>

  </div>
</body>
</html>
