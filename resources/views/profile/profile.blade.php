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
                <div class="absolute flex justify-center items-center bottom-0 right-0 h-8 w-8 rounded-full bg-primary z-10">
                  <svg width="25" height="25" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 2.15068V2.65068C3.17454 2.65068 3.33645 2.55966 3.42717 2.41055L3 2.15068ZM3.7 1V0.5C3.52546 0.5 3.36355 0.59102 3.27283 0.740139L3.7 1ZM6.3 1L6.72717 0.74014C6.63645 0.59102 6.47454 0.5 6.3 0.5V1ZM7 2.15068L6.57283 2.41055C6.66355 2.55966 6.82546 2.65068 7 2.65068V2.15068ZM1.5 7.0411V3.10959H0.5V7.0411H1.5ZM2 2.65068H3V1.65068H2V2.65068ZM3.42717 2.41055L4.12717 1.25986L3.27283 0.740139L2.57283 1.89082L3.42717 2.41055ZM3.7 1.5H6.3V0.5H3.7V1.5ZM5.87283 1.25986L6.57283 2.41055L7.42717 1.89082L6.72717 0.74014L5.87283 1.25986ZM7 2.65068H8V1.65068H7V2.65068ZM8.5 3.10959V7.0411H9.5V3.10959H8.5ZM8.5 7.0411C8.5 7.27497 8.29613 7.5 8 7.5V8.5C8.80844 8.5 9.5 7.8664 9.5 7.0411H8.5ZM8 2.65068C8.29612 2.65068 8.5 2.87571 8.5 3.10959H9.5C9.5 2.28429 8.80844 1.65068 8 1.65068V2.65068ZM1.5 3.10959C1.5 2.87571 1.70387 2.65068 2 2.65068V1.65068C1.19156 1.65068 0.5 2.28429 0.5 3.10959H1.5ZM2 7.5C1.70388 7.5 1.5 7.27497 1.5 7.0411H0.5C0.5 7.86639 1.19156 8.5 2 8.5V7.5ZM6 4.83562C6 5.33429 5.57227 5.77397 5 5.77397V6.77397C6.08459 6.77397 7 5.92571 7 4.83562H6ZM5 5.77397C4.42773 5.77397 4 5.33429 4 4.83562H3C3 5.92571 3.91541 6.77397 5 6.77397V5.77397ZM4 4.83562C4 4.33694 4.42773 3.89726 5 3.89726V2.89726C3.91541 2.89726 3 3.74552 3 4.83562H4ZM5 3.89726C5.57227 3.89726 6 4.33694 6 4.83562H7C7 3.74552 6.08459 2.89726 5 2.89726V3.89726ZM8 7.5H2V8.5H8V7.5Z" fill="white" />
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
      <div class="mt-12 flex justify-between w-full border-2 border-text_secondary min-h-28 rounded-xl bg-white  text-text_secondary text-md px-2 focus:outline-field_border">
        <div class="flex justify-center items-center">
          <svg width="60" height="60" class="mr-3" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.40953 1C3.22036 1.00771 3.03778 1.07163 2.88511 1.18359C2.73244 1.29554 2.6166 1.45047 2.55239 1.62857L1.11429 5.70476C0.961902 6.14595 0.961902 6.62549 1.11429 7.06667C1.26908 7.5723 1.57823 8.01681 1.99838 8.3379C2.41852 8.65899 2.92862 8.84056 3.45715 8.85715C3.7999 8.84487 4.13689 8.76514 4.44881 8.62252C4.76073 8.4799 5.04148 8.2772 5.27499 8.02599C5.50851 7.77478 5.69022 7.47999 5.80972 7.15851C5.92922 6.83702 5.98417 6.49513 5.97144 6.15238C5.94568 6.843 6.19492 7.51565 6.66451 8.02272C7.13408 8.5298 7.78563 8.82988 8.47618 8.85715C8.81894 8.84487 9.1559 8.76514 9.4679 8.62252C9.7798 8.4799 10.0606 8.2772 10.2941 8.02599C10.5275 7.77478 10.7092 7.47999 10.8288 7.15851C10.9483 6.83702 11.0032 6.49513 10.9905 6.15238C10.9777 6.49513 11.0327 6.83702 11.1522 7.15851C11.2717 7.47999 11.4534 7.77478 11.6869 8.02599C11.9205 8.2772 12.2012 8.4799 12.5131 8.62252C12.825 8.76514 13.162 8.84487 13.5048 8.85715C14.192 8.825 14.8387 8.52278 15.3042 8.01624C15.7697 7.50971 16.0164 6.83985 15.9905 6.15238C15.9778 6.49668 16.0333 6.84009 16.1541 7.16278C16.2748 7.48549 16.4581 7.7811 16.6936 8.03256C16.9291 8.28401 17.2122 8.48634 17.5263 8.62787C17.8404 8.7694 18.1794 8.84732 18.5238 8.85715C19.0556 8.84449 19.57 8.66473 19.9939 8.34336C20.4179 8.02199 20.7299 7.57531 20.8857 7.06667C21.0381 6.62549 21.0381 6.14595 20.8857 5.70476L19.4286 1.62857C19.3644 1.45047 19.2486 1.29554 19.0959 1.18359C18.9431 1.07163 18.7606 1.00771 18.5714 1H3.40953Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M19.5619 8.60986V18.8575C19.5619 19.2364 19.4114 19.5997 19.1435 19.8677C18.8756 20.1356 18.5122 20.286 18.1333 20.286H15.2762" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2.65712 8.85693V18.8872C2.65712 19.2581 3.09184 19.6138 3.86578 19.876C4.63973 20.1382 5.68964 20.2855 6.78411 20.2855H15.0381" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <div class="flex justify-start">
            <div class="">
              <span class="mb-3 font-bold text-xl text-text_primary align-top">Daftar Jadi Penjual</span>
              <p class="text-sm">Jadi Penjual dan Jual Produk</p>
            </div>
          </div>
        </div>
        <a class="w-12 flex justify-center items-center" href="./seller/register">
          <svg width="19" height="19" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L6 6L1 11" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>

      <div class="mt-8 flex justify-between w-full border-2 border-text_secondary min-h-28 rounded-xl bg-white  text-text_secondary text-md px-2 focus:outline-field_border">
        <div class="flex justify-center items-center">
          <svg width="60" height="60" class="mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 14.3999L11.3438 15.1545C11.7201 15.4817 12.2799 15.4817 12.6562 15.1545L12 14.3999ZM6.87317 15.2542C7.40445 15.1033 7.71283 14.5503 7.56196 14.0191C7.41108 13.4878 6.85809 13.1794 6.32681 13.3303L6.87317 15.2542ZM17.6732 13.3303C17.1419 13.1794 16.5889 13.4878 16.438 14.0191C16.2872 14.5503 16.5955 15.1033 17.1268 15.2542L17.6732 13.3303ZM15.8 7.09555C15.8 7.64012 15.5847 8.31631 15.1705 9.08156C14.7636 9.83343 14.2085 10.5919 13.6329 11.2801C13.0601 11.9649 12.4845 12.5597 12.0507 12.984C11.8344 13.1955 11.6549 13.3633 11.5307 13.4771C11.4687 13.534 11.4205 13.5773 11.3885 13.6058C11.3726 13.62 11.3607 13.6305 11.3531 13.6372C11.3493 13.6405 11.3466 13.6428 11.3451 13.6442C11.3443 13.6449 11.3438 13.6453 11.3436 13.6455C11.3435 13.6456 11.3434 13.6456 11.3435 13.6456C11.3435 13.6456 11.3436 13.6455 11.3436 13.6455C11.3437 13.6454 11.3438 13.6453 12 14.3999C12.6562 15.1545 12.6563 15.1544 12.6565 15.1542C12.6566 15.1542 12.6568 15.154 12.6569 15.1538C12.6573 15.1536 12.6577 15.1532 12.6581 15.1528C12.6591 15.152 12.6603 15.1509 12.6619 15.1495C12.6649 15.1469 12.6691 15.1432 12.6744 15.1385C12.685 15.1292 12.7001 15.1159 12.7193 15.0988C12.7576 15.0646 12.8126 15.0152 12.8818 14.9518C13.02 14.8251 13.2156 14.6423 13.4493 14.4136C13.9155 13.9575 14.5399 13.3131 15.1671 12.5632C15.7915 11.8166 16.4364 10.9446 16.9295 10.0335C17.4153 9.13567 17.8 8.1162 17.8 7.09555H15.8ZM12 14.3999C12.6562 13.6453 12.6563 13.6454 12.6564 13.6455C12.6564 13.6455 12.6565 13.6456 12.6565 13.6456C12.6565 13.6456 12.6565 13.6456 12.6564 13.6455C12.6562 13.6453 12.6557 13.6449 12.6549 13.6442C12.6533 13.6428 12.6507 13.6405 12.6469 13.6372C12.6393 13.6305 12.6274 13.62 12.6115 13.6058C12.5795 13.5773 12.5313 13.534 12.4693 13.4771C12.345 13.3633 12.1656 13.1955 11.9493 12.984C11.5155 12.5597 10.9399 11.9649 10.3671 11.2801C9.7915 10.5919 9.23636 9.83343 8.82947 9.08156C8.41533 8.31631 8.2 7.64012 8.2 7.09555H6.2C6.2 8.1162 6.58466 9.13567 7.07052 10.0335C7.56363 10.9446 8.20849 11.8166 8.83292 12.5632C9.46013 13.3131 10.0845 13.9575 10.5507 14.4136C10.7844 14.6423 10.9799 14.8251 11.1182 14.9518C11.1874 15.0152 11.2424 15.0646 11.2807 15.0988C11.2999 15.1159 11.3149 15.1292 11.3256 15.1385C11.3309 15.1432 11.3351 15.1469 11.3381 15.1495C11.3396 15.1509 11.3409 15.152 11.3418 15.1528C11.3423 15.1532 11.3427 15.1536 11.343 15.1538C11.3432 15.154 11.3434 15.1542 11.3435 15.1542C11.3437 15.1544 11.3438 15.1545 12 14.3999ZM8.2 7.09555C8.2 5.07511 9.88048 3.3999 12 3.3999V1.3999C8.81758 1.3999 6.2 3.92933 6.2 7.09555H8.2ZM12 3.3999C14.1195 3.3999 15.8 5.07511 15.8 7.09555H17.8C17.8 3.92933 15.1824 1.3999 12 1.3999V3.3999ZM20.6 17.5999C20.6 17.8038 20.505 18.0886 20.1438 18.4445C19.779 18.8038 19.1999 19.1735 18.4036 19.5053C16.8154 20.167 14.5519 20.5999 12 20.5999V22.5999C14.75 22.5999 17.2866 22.1374 19.1728 21.3514C20.1138 20.9593 20.9406 20.467 21.5474 19.8693C22.1577 19.268 22.6 18.5005 22.6 17.5999H20.6ZM12 20.5999C9.44806 20.5999 7.18462 20.167 5.59638 19.5053C4.80008 19.1735 4.22096 18.8038 3.85619 18.4445C3.49495 18.0886 3.39999 17.8038 3.39999 17.5999H1.39999C1.39999 18.5005 1.84229 19.268 2.45263 19.8693C3.05943 20.467 3.8862 20.9593 4.82715 21.3514C6.71343 22.1374 9.25 22.5999 12 22.5999V20.5999ZM3.39999 17.5999C3.39999 17.3489 3.55103 16.9617 4.15974 16.4925C4.75842 16.0311 5.6786 15.5934 6.87317 15.2542L6.32681 13.3303C4.98606 13.711 3.80624 14.2398 2.93876 14.9085C2.08129 15.5694 1.39999 16.476 1.39999 17.5999H3.39999ZM17.1268 15.2542C18.3214 15.5934 19.2416 16.0311 19.8402 16.4925C20.4489 16.9617 20.6 17.3489 20.6 17.5999H22.6C22.6 16.476 21.9187 15.5694 21.0612 14.9085C20.1937 14.2398 19.0139 13.711 17.6732 13.3303L17.1268 15.2542Z" fill="black" />
          </svg>
          <div class="flex-grow">
            <span class="mb-3 font-bold text-xl text-text_primary">Alamat</span>
            <p class="text-sm">Jl. Raya Tajem No.32, Tajem, Maguwoharjo,</p>
            <p class="text-sm">Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
          </div>
        </div>
        <a class="w-12 flex justify-center items-center" href="./profile/address">
          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.50002 17.5754H17.1M11.875 3.80039L15.2 6.65039M3.32502 12.3504L12.6915 2.65677C13.7 1.64827 15.3351 1.64826 16.3436 2.65677C17.3521 3.66527 17.3521 5.30038 16.3436 6.30889L6.65002 15.6754L1.90002 17.1004L3.32502 12.3504Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
    <div class="fixed bottom-0 w-full bg-white p-3 flex justify-around max-w-xl">
      <a class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.6315 9.4887C20.1566 9.4887 19.5276 9.47818 18.7444 9.47818C16.8343 9.47818 15.2637 7.89727 15.2637 5.96926V2.58655C15.2637 2.32044 15.0513 2.10376 14.7878 2.10376H9.22418C6.62776 2.10376 4.52917 4.23478 4.52917 6.84649V18.18C4.52917 20.9201 6.72774 23.1405 9.44081 23.1405H17.7258C20.3128 23.1405 22.4104 21.0231 22.4104 18.4093V9.96203C22.4104 9.69486 22.199 9.47923 21.9344 9.48028C21.4897 9.48344 20.9565 9.4887 20.6315 9.4887Z" fill="#34A853" />
          <path d="M17.7655 2.7005C17.451 2.37338 16.9019 2.59847 16.9019 3.05181V5.82551C16.9019 6.98884 17.8601 7.94601 19.0235 7.94601C19.7566 7.95442 20.7748 7.95653 21.6394 7.95442C22.0822 7.95337 22.3073 7.4243 22.0002 7.10454C20.8905 5.95067 18.9036 3.88276 17.7655 2.7005Z" fill="#34A853" />
        </svg>
      </a>
      <a class="focus:outline-none" href="./home">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.99066 21.85V18.6338C9.99066 17.8128 10.6611 17.1472 11.4881 17.1472H14.5113C14.9084 17.1472 15.2893 17.3038 15.5701 17.5826C15.851 17.8614 16.0087 18.2395 16.0087 18.6338V21.85C16.0062 22.1913 16.141 22.5195 16.3833 22.7618C16.6255 23.004 16.9552 23.1402 17.299 23.1402H19.3615C20.3248 23.1427 21.2495 22.7646 21.9315 22.0892C22.6135 21.4139 22.9968 20.4969 22.9968 19.5407V10.3782C22.9968 9.60569 22.6519 8.87296 22.055 8.37737L15.0387 2.81442C13.8182 1.83904 12.0694 1.87054 10.8854 2.88921L4.0291 8.37737C3.40402 8.85836 3.03043 9.59326 3.01196 10.3782V19.5313C3.01196 21.5245 4.63955 23.1402 6.64729 23.1402H8.66273C9.37686 23.1402 9.95723 22.5683 9.96241 21.8593L9.99066 21.85Z" fill="#34A853" />
        </svg>
      </a>
      <a class="focus:outline-none">
        <svg width="40" height="40" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.70169 21.2472C5.70169 17.6456 8.62141 14.7258 12.2231 14.7258H14.9578C18.5595 14.7258 21.4792 17.6456 21.4792 21.2472C21.4792 21.7119 21.1025 22.0887 20.6378 22.0887H6.54316C6.07843 22.0887 5.70169 21.7119 5.70169 21.2472Z" fill="#1E1E1E" />
          <path d="M13.7277 12.8966C16.4317 12.8966 18.5983 10.7291 18.5983 8.02604C18.5983 5.32296 16.4317 3.15552 13.7277 3.15552C11.0246 3.15552 8.85721 5.32296 8.85721 8.02604C8.85721 10.7291 11.0246 12.8966 13.7277 12.8966Z" fill="#1E1E1E" />
        </svg>
      </a>
    </div>
  </div>
</body>

</html>