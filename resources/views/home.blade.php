<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmart Home</title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">
  <div class="container mx-auto max-w-xl bg-background min-h-screen">
    <div class="p-4 flex justify-between items-center">
      <input type="text" placeholder="Search" class="w-3/4 p-2 border rounded">
      <div class="flex space-x-4">
        <button class="">
          <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="46" height="46" rx="6.5" fill="#3FB860" />
            <rect x="0.5" y="0.5" width="46" height="46" rx="6.5" stroke="#2F994C" />
            <path d="M20.375 32.8749C21.5256 32.8749 22.4584 31.9422 22.4584 30.7916C22.4584 29.641 21.5256 28.7083 20.375 28.7083C19.2244 28.7083 18.2917 29.641 18.2917 30.7916C18.2917 31.9422 19.2244 32.8749 20.375 32.8749Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M28.7083 32.8749C29.8589 32.8749 30.7917 31.9422 30.7917 30.7916C30.7917 29.641 29.8589 28.7083 28.7083 28.7083C27.5577 28.7083 26.625 29.641 26.625 30.7916C26.625 31.9422 27.5577 32.8749 28.7083 32.8749Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.125 14.125H16.2083L18.2917 26.625C18.5164 27.264 18.9426 27.8128 19.5063 28.1885C20.0699 28.5643 20.7404 28.7467 21.4167 28.7083H28.7083C29.3846 28.7467 30.0551 28.5643 30.6187 28.1885C31.1823 27.8128 31.6086 27.264 31.8333 26.625L32.875 19.3333H17.0417" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false" class="relative">
          <button @click="dropdownOpen = !dropdownOpen" class="focus:outline-none">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="45" height="45" rx="6" fill="#E7F6EB" fill-opacity="0.9" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7959 14.3367C24.7959 15.3511 23.768 16.1735 22.5 16.1735C21.232 16.1735 20.2041 15.3511 20.2041 14.3367C20.2041 13.3223 21.232 12.5 22.5 12.5C23.768 12.5 24.7959 13.3223 24.7959 14.3367ZM24.7959 22.5C24.7959 23.5144 23.768 24.3367 22.5 24.3367C21.232 24.3367 20.2041 23.5144 20.2041 22.5C20.2041 21.4856 21.232 20.6633 22.5 20.6633C23.768 20.6633 24.7959 21.4856 24.7959 22.5ZM22.5 32.5C23.768 32.5 24.7959 31.6776 24.7959 30.6633C24.7959 29.6489 23.768 28.8265 22.5 28.8265C21.232 28.8265 20.2041 29.6489 20.2041 30.6633C20.2041 31.6776 21.232 32.5 22.5 32.5Z" fill="black" />
            </svg>
          </button>
          <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-50">
            <span class="font-bold block px-4 py-2 text-sm capitalize text-gray-700">
              Hello, {{ isset($user) ? $user->user_name : 'Pengunjung' }}
            </span>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-primary hover:text-white">
              Profil Saya
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-primary hover:text-white">
              Toko Saya
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-primary hover:text-white">
              Bantuan
            </a>
            <a href="./login" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-primary hover:text-white">
              {{ isset($user) ? 'Keluar' : 'Masuk' }}
            </a>
          </div>
        </div>
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
    <div class="flex flex-wrap justify-around p-4 gap-2">
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/nutri_tanaman.png') }}" alt="Nutri Tanaman" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Nutrisi Tanaman</p>
        </div>
      </div>
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/bibit_beni.png') }}" alt="Bibit & Beni" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Bibit & Benih</p>
        </div>
      </div>
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/proteksi_pertanian.png') }}" alt="Proteksi Tanaman" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Proteksi Tanaman</p>
        </div>
      </div>
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/peralatan_pertanian.png') }}" alt="Peralatan Pertanian" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Peralatan Pertanian</p>
        </div>
      </div>
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/teknologi_pertanian.png') }}" alt="Peralatan Pertanian" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Teknologi Pertanian</p>
        </div>
      </div>
      <div class="w-5/12 relative h-28 hover:scale-105 duration-500 rounded-lg p-4 m-2">
        <img src="{{ asset('images/produk_peternakan.png') }}" alt="Produk Peternakan" class="object-cover w-full h-full absolute inset-0 rounded-lg">
        <div class="flex justify-center items-center h-full w-full relative z-10 text-white font-bold">
          <p class="">Produk Pertanian</p>
        </div>
      </div>
    </div>
    <div class="flex justify-around bg-white p-1 h-full">
      <button class="flex-1 bg-gray-300 hover:bg-primary hover:text-white hover:duration-300 p-2 m-1 rounded-lg h-full text-sm">Rekomendasi</button>
      <button class="flex-1 bg-gray-300 hover:bg-primary hover:text-white hover:duration-300 p-2 m-1 rounded-lg h-full text-sm">Produk Baru</button>
      <button class="flex-1 bg-gray-300 hover:bg-primary hover:text-white hover:duration-300 p-2 m-1 rounded-lg h-full text-sm">Promo & Diskon</button>
    </div>
    <div class="p-4">
      <a class="flex bg-white border-2 border-text_secondary rounded-lg p-4 mb-4" href="/">
        <img src="{{ asset('images/daging_segar.png') }}" alt="Daging Segar" class="w-24 h-24 rounded-lg mr-4">
        <div>
          <h3 class="font-bold">Daging Segar Pak Rahmat 500g</h3>
          <p class="text-green-600 font-bold">Rp50,000</p>
          <p class="text-gray-600">Rating 4.9 &#9733; 231 Terjual</p>
        </div>
      </a>
    </div>
    <div class="fixed bottom-0 w-full bg-white p-3 flex justify-around max-w-xl">
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
    </div>
  </div>
</body>

</html>
