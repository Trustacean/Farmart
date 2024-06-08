<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FARMART</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-900">
  <div class="container mx-auto max-w-xl bg-background h-screen">
    <div class="flex flex-col justify-between pt-16 pb-10 px-8 h-full">
      <div class="">
        <a href="./" class="text-2xl text-blue-400 my-auto flex flex-row">
          <svg class="my-auto mr-2" width="14" height="18" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.9375 9.8916C0.9375 9.61084 1.03857 9.35254 1.25195 9.15039L10.1577 0.435547C10.3486 0.244629 10.5957 0.143555 10.8877 0.143555C11.4717 0.143555 11.9209 0.581543 11.9209 1.16553C11.9209 1.44629 11.7974 1.70459 11.6177 1.89551L3.44189 9.8916L11.6177 17.8877C11.7974 18.0786 11.9209 18.3257 11.9209 18.6177C11.9209 19.2017 11.4717 19.6396 10.8877 19.6396C10.5957 19.6396 10.3486 19.5386 10.1577 19.3364L1.25195 10.6328C1.03857 10.4194 0.9375 10.1724 0.9375 9.8916Z" fill="#007AFF"/>
          </svg>
          Kembali
        </a>
        <svg class="mt-8" width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25.5 15H31.75M25.5 20H31.75M25.5 25H31.75M8 32.5H33C33.9946 32.5 34.9484 32.1049 35.6516 31.4016C36.3549 30.6984 36.75 29.7446 36.75 28.75V11.25C36.75 10.2554 36.3549 9.30161 35.6516 8.59835C34.9484 7.89509 33.9946 7.5 33 7.5H8C7.00544 7.5 6.05161 7.89509 5.34835 8.59835C4.64509 9.30161 4.25 10.2554 4.25 11.25V28.75C4.25 29.7446 4.64509 30.6984 5.34835 31.4016C6.05161 32.1049 7.00544 32.5 8 32.5ZM18 15.625C18 16.0354 17.9192 16.4417 17.7621 16.8209C17.6051 17.2 17.3749 17.5445 17.0847 17.8347C16.7945 18.1249 16.45 18.3551 16.0709 18.5121C15.6917 18.6692 15.2854 18.75 14.875 18.75C14.4646 18.75 14.0583 18.6692 13.6791 18.5121C13.3 18.3551 12.9555 18.1249 12.6653 17.8347C12.3751 17.5445 12.1449 17.2 11.9879 16.8209C11.8308 16.4417 11.75 16.0354 11.75 15.625C11.75 14.7962 12.0792 14.0013 12.6653 13.4153C13.2513 12.8292 14.0462 12.5 14.875 12.5C15.7038 12.5 16.4987 12.8292 17.0847 13.4153C17.6708 14.0013 18 14.7962 18 15.625ZM20.1567 26.185C18.5305 27.0512 16.7158 27.5028 14.8733 27.5C13.032 27.5023 11.2185 27.0506 9.59333 26.185C9.99048 25.1037 10.7099 24.1704 11.6544 23.5111C12.599 22.8518 13.7231 22.4983 14.875 22.4983C16.0269 22.4983 17.151 22.8518 18.0956 23.5111C19.0401 24.1704 19.7595 25.1037 20.1567 26.185Z" stroke="#D7D7D7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h2 class="text-3xl font-bold text-text_primary">Daftar</h2>
        <p class="text-md text-text_secondary mt-2">Masukkan nomor telepon, nama, dan kata sandi</p>
      </div>
      <div class="mt-3 flex flex-col justify-between items-center w-full text-center gap-4 h-5/6">
        <div class="w-full">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="flex flex-col justify-between h-44">
              <input required type="text" class="w-full h-12 rounded-xl  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Nomor Telepon" id="user_phone" name="user_phone">
              <input required type="text" class="w-full h-12 rounded-xl  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Nama" id="user_name" name="user_name">
              <input required type="password" class="w-full h-12 rounded-xl  text-text_secondary text-md px-4 focus:outline-field_border" placeholder="Kata Sandi" id="user_password" name="user_password">
              </div>
            <button type="submit" class="mt-16 flex items-center justify-center bg-primary w-full h-12 rounded-xl text-background text-lg">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
