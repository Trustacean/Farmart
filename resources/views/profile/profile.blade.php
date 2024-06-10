<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmart Home</title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">
  <div class="container mx-auto max-w-xl bg-background h-screen">
    <div class="bg-background pt-10 pb-10 px-8 h-full min-h-96">
      <div>
        <div class="text-3xl text-text_primary font-bold flex flex-row mb-4">
          Profil
        </div>
        <div class="flex flex-wrap flex-row">
          <div class="rounded">
            <div>
              <img src="https://via.placeholder.com/150" alt="profile" class="rounded-full w-24 h-24 mx-auto" />
              <div class="relative">
                <div
                  class="absolute flex justify-center items-center bottom-0 right-0 h-8 w-8 rounded-full bg-primary z-10">
                  <svg width="25" height="25" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3 2.15068V2.65068C3.17454 2.65068 3.33645 2.55966 3.42717 2.41055L3 2.15068ZM3.7 1V0.5C3.52546 0.5 3.36355 0.59102 3.27283 0.740139L3.7 1ZM6.3 1L6.72717 0.74014C6.63645 0.59102 6.47454 0.5 6.3 0.5V1ZM7 2.15068L6.57283 2.41055C6.66355 2.55966 6.82546 2.65068 7 2.65068V2.15068ZM1.5 7.0411V3.10959H0.5V7.0411H1.5ZM2 2.65068H3V1.65068H2V2.65068ZM3.42717 2.41055L4.12717 1.25986L3.27283 0.740139L2.57283 1.89082L3.42717 2.41055ZM3.7 1.5H6.3V0.5H3.7V1.5ZM5.87283 1.25986L6.57283 2.41055L7.42717 1.89082L6.72717 0.74014L5.87283 1.25986ZM7 2.65068H8V1.65068H7V2.65068ZM8.5 3.10959V7.0411H9.5V3.10959H8.5ZM8.5 7.0411C8.5 7.27497 8.29613 7.5 8 7.5V8.5C8.80844 8.5 9.5 7.8664 9.5 7.0411H8.5ZM8 2.65068C8.29612 2.65068 8.5 2.87571 8.5 3.10959H9.5C9.5 2.28429 8.80844 1.65068 8 1.65068V2.65068ZM1.5 3.10959C1.5 2.87571 1.70387 2.65068 2 2.65068V1.65068C1.19156 1.65068 0.5 2.28429 0.5 3.10959H1.5ZM2 7.5C1.70388 7.5 1.5 7.27497 1.5 7.0411H0.5C0.5 7.86639 1.19156 8.5 2 8.5V7.5ZM6 4.83562C6 5.33429 5.57227 5.77397 5 5.77397V6.77397C6.08459 6.77397 7 5.92571 7 4.83562H6ZM5 5.77397C4.42773 5.77397 4 5.33429 4 4.83562H3C3 5.92571 3.91541 6.77397 5 6.77397V5.77397ZM4 4.83562C4 4.33694 4.42773 3.89726 5 3.89726V2.89726C3.91541 2.89726 3 3.74552 3 4.83562H4ZM5 3.89726C5.57227 3.89726 6 4.33694 6 4.83562H7C7 3.74552 6.08459 2.89726 5 2.89726V3.89726ZM8 7.5H2V8.5H8V7.5Z"
                      fill="white" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="ml-10 flex-grow min-w-16">
            <p class="text-text_primary font-semibold text-2xl">{{ $user->user_name }}</p>
            <p class="text-text_secondary text-md">
            <p class="text-text_secondary text-md">
              {{ '+62 ' . substr(ltrim($user->user_phone, '0'), 0, 3) . ' ' . substr(ltrim($user->user_phone, '0'), 3, 4) . ' ' . substr(ltrim($user->user_phone, '0'), 7) }}
            </p>
            </p>
          </div>
        </div>
      </div>
      <div
        class="mt-5 flex justify-between w-full shadow drop-shadow-lg h-[80px] rounded-xl bg-white
        text-text_secondary text-md p-2 px-4">
        <div class="flex justify-center items-center">
          <img src="/icons/Toko.svg" alt="Icon Toko" class="h-8">
          <div class="flex justify-start">
            <div class="">
              @if ($isSeller)
          <span class="mb-3 font-bold text-xl text-text_primary align-top">Toko Saya</span>
          <p class="text-sm">Daftar Produk Yang Sedang Dijual</p>
        @else
        <span class="mb-3 font-medium text-xl text-text_primary align-top px-4">Daftar Jadi Penjual</span>
        <p class="text-sm px-4">Jadi Penjual dan Jual Produk</p>
      @endif
            </div>
          </div>
        </div>
        <a class="w-12 flex justify-center items-center"
          href="{{ $isSeller ? './seller/store' : './seller/register' }}">
          <img src="/icons/Chevron-right.svg" alt="Icon Chevron-right">
        </a>
      </div>

      <div
        class="mt-5 flex justify-between w-full shadow drop-shadow-lg rounded-xl bg-white
        text-text_secondary text-md p-2 px-4">
        <div class="flex justify-center items-center">
          <img src="/icons/Alamat.svg" alt="Icon Alamat" class="h-8">
          <div class="flex-grow">
            <span class="mb-3 font-medium text-xl text-text_primary px-4">Alamat</span>
            <p class="text-sm px-4">{{ $user->user_address_detail }}</p>
            <p class="text-sm px-4">{{ $address }} {{ $user->user_postal_code }}</p>
            <p class="text-sm px-4">{{ $user->user_address }}</p>
          </div>
        </div>
        <a class="w-12 flex justify-center items-center" href="./profile/address">
          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.50002 17.5754H17.1M11.875 3.80039L15.2 6.65039M3.32502 12.3504L12.6915 2.65677C13.7 1.64827 15.3351 1.64826 16.3436 2.65677C17.3521 3.66527 17.3521 5.30038 16.3436 6.30889L6.65002 15.6754L1.90002 17.1004L3.32502 12.3504Z"
              stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
    <div class="fixed bottom-0 w-full bg-white p-3 flex justify-around max-w-xl">
      <a class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M20.6315 9.4887C20.1566 9.4887 19.5276 9.47818 18.7444 9.47818C16.8343 9.47818 15.2637 7.89727 15.2637 5.96926V2.58655C15.2637 2.32044 15.0513 2.10376 14.7878 2.10376H9.22418C6.62776 2.10376 4.52917 4.23478 4.52917 6.84649V18.18C4.52917 20.9201 6.72774 23.1405 9.44081 23.1405H17.7258C20.3128 23.1405 22.4104 21.0231 22.4104 18.4093V9.96203C22.4104 9.69486 22.199 9.47923 21.9344 9.48028C21.4897 9.48344 20.9565 9.4887 20.6315 9.4887Z"
            fill="#34A853" />
          <path
            d="M17.7655 2.7005C17.451 2.37338 16.9019 2.59847 16.9019 3.05181V5.82551C16.9019 6.98884 17.8601 7.94601 19.0235 7.94601C19.7566 7.95442 20.7748 7.95653 21.6394 7.95442C22.0822 7.95337 22.3073 7.4243 22.0002 7.10454C20.8905 5.95067 18.9036 3.88276 17.7655 2.7005Z"
            fill="#34A853" />
        </svg>
      </a>
      <a class="focus:outline-none" href="./home">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M9.99066 21.85V18.6338C9.99066 17.8128 10.6611 17.1472 11.4881 17.1472H14.5113C14.9084 17.1472 15.2893 17.3038 15.5701 17.5826C15.851 17.8614 16.0087 18.2395 16.0087 18.6338V21.85C16.0062 22.1913 16.141 22.5195 16.3833 22.7618C16.6255 23.004 16.9552 23.1402 17.299 23.1402H19.3615C20.3248 23.1427 21.2495 22.7646 21.9315 22.0892C22.6135 21.4139 22.9968 20.4969 22.9968 19.5407V10.3782C22.9968 9.60569 22.6519 8.87296 22.055 8.37737L15.0387 2.81442C13.8182 1.83904 12.0694 1.87054 10.8854 2.88921L4.0291 8.37737C3.40402 8.85836 3.03043 9.59326 3.01196 10.3782V19.5313C3.01196 21.5245 4.63955 23.1402 6.64729 23.1402H8.66273C9.37686 23.1402 9.95723 22.5683 9.96241 21.8593L9.99066 21.85Z"
            fill="#34A853" />
        </svg>
      </a>
      <a class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M5.70169 21.2472C5.70169 17.6456 8.62141 14.7258 12.2231 14.7258H14.9578C18.5595 14.7258 21.4792 17.6456 21.4792 21.2472C21.4792 21.7119 21.1025 22.0887 20.6378 22.0887H6.54316C6.07843 22.0887 5.70169 21.7119 5.70169 21.2472Z"
            fill="#1E1E1E" />
          <path
            d="M13.7277 12.8966C16.4317 12.8966 18.5983 10.7291 18.5983 8.02604C18.5983 5.32296 16.4317 3.15552 13.7277 3.15552C11.0246 3.15552 8.85721 5.32296 8.85721 8.02604C8.85721 10.7291 11.0246 12.8966 13.7277 12.8966Z"
            fill="#1E1E1E" />
        </svg>
      </a>
    </div>
  </div>
</body>

</html>