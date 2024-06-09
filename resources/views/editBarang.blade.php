<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Barang</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">
  <div class="container mx-auto max-w-xl bg-white min-h-screen p-4 rounded-lg">
    <div class="flex justify-between items-center mb-4">
      <div class="flex space-x-4">
        <button class="focus:outline-none">
          <svg width="17" height="27" viewBox="0 0 17 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.4375 13.8916C1.4375 13.6108 1.53857 13.3525 1.75195 13.1504L10.6577 4.43555C10.8486 4.24463 11.0957 4.14355 11.3877 4.14355C11.9717 4.14355 12.4209 4.58154 12.4209 5.16553C12.4209 5.44629 12.2974 5.70459 12.1177 5.89551L3.94189 13.8916L12.1177 21.8877C12.2974 22.0786 12.4209 22.3257 12.4209 22.6177C12.4209 23.2017 11.9717 23.6396 11.3877 23.6396C11.0957 23.6396 10.8486 23.5386 10.6577 23.3364L1.75195 14.6328C1.53857 14.4194 1.4375 14.1724 1.4375 13.8916Z" fill="#020202" />
          </svg>
        </button>
      </div>
    </div>

    <div class="text-center relative h-50 mb-4">
      <button class="focus:outline-none">
        <svg width="220" height="210" viewBox="0 0 262 230" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M131.085 133.098C105.147 133.098 84.125 154.739 84.125 181.432C84.125 208.128 105.147 229.771 131.085 229.771C157.023 229.771 178.047 208.128 178.047 181.432C178.047 154.739 157.023 133.098 131.085 133.098ZM157.538 187.162H137.129V208.709C137.129 212.167 134.36 214.981 131 214.981C127.64 214.981 124.871 212.17 124.871 208.709V187.162H104.547C101.187 187.162 98.4515 184.312 98.4515 180.853C98.4515 177.394 101.185 174.545 104.547 174.545H124.871V154.16C124.871 150.703 127.64 147.887 131 147.887C134.36 147.887 137.129 150.701 137.129 154.16V174.545H157.538C160.898 174.545 163.633 177.394 163.633 180.853C163.633 184.312 160.898 187.162 157.538 187.162Z" fill="black" />
          <path d="M251.558 0H10.6145C4.9819 0 0.25 5.16351 0.25 10.9615V170.917C0.25 176.717 4.9819 180.851 10.6145 180.851H71.8678C71.8678 147.204 98.4329 119.899 131.085 119.899C163.739 119.899 190.304 147.204 190.304 180.851H251.558C257.19 180.851 261.75 176.715 261.75 170.917V10.9615C261.75 5.16351 257.19 0 251.558 0ZM203.379 72.4536L164.748 112.228L105.946 51.7077C105.147 50.8852 103.858 50.8852 103.059 51.7077L65.762 90.0975L48.7354 72.5732C47.9385 71.7508 46.5708 71.7508 45.7738 72.5732L18.6359 100.431V18.9257H243.362V110.653L206.264 72.4536C205.465 71.6311 204.178 71.6311 203.379 72.4536Z" fill="black" />
        </svg>
      </button>
    </div>

    <div class="p-4">
        <form class="space-y-6">
            <div class="  mb-4">
                <input type="text" id="nama-barang" name="nama-barang" placeholder="Nama Barang" style="width: 510px; height: 60px;" class="mt-1 block w-full px-6 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="  mb-4">
                <textarea id="deskripsi-barang" name="deskripsi-barang" rows="3" cols="50" placeholder="Deskripsi Barang" style="width: 510px; height:150px" class="mt-1 block w-full px-6 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>

            </div>
            <div class="  mb-4">
                <input type="text" id="harga" name="harga" inputmode="numeric" placeholder="Harga" style="width: 510px; height: 60px;" class="mt-1 block w-full px-6 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <input type="text" id="diskon" name="diskon" inputmode="numeric" placeholder="Diskon (%)" style="width: 510px; height: 60px;" class="mt-1 block w-full px-6 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <input type="text" id="stok" name="stok" inputmode="numeric" placeholder="Stok" style="width: 510px; height: 60px;" class="mt-1 block w-full px-6 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="flex justify-around bg-white p-1 h-full ">
            <button class="flex-1 bg-gray-300 hover:bg-primary hover:text-white hover:duration-300 p-2 m-1 rounded-lg h-full text-sm" style="width: 100px; height: 50px;">Hapus Produk</button>
            <button class="flex-1 bg-gray-300 hover:bg-primary hover:text-white hover:duration-300 p-2 m-1 rounded-lg h-full text-sm" style="width: 100px; height: 50px;">Simpan</button>
            </div>
            </form>
        </div>
        </div>
</body>

</html>
