<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FARMART</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-400">
    <div class="container mx-auto max-w-xl bg-background h-screen">
        <div class="flex flex-col justify-between pt-5 pb-10 px-8 h-full">
            <div class="w-full">
                <div class="h-14">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="flex flex-row justify-between h-44 gap-2">
                            <button
                                class="px-4 w-[50px] h-12  bg-neutral-200/80 shadow-lg rounded-xl flex items-center mx-auto border">
                                <img src="/icons/Chevron-left.svg" alt="" class="w-[30px]">
                            </button>
                            <div class="flex flex-row justify-between items-end">

                            </div>
                            <button
                                class="px-4 w-[50px] h-12  bg-primary rounded-xl flex items-center mx-auto shadow-lg ">
                                <img src="/icons/search.svg" alt="" class="w-[30px]">
                            </button>
                        </div>
                    </form>
                </div>
                <div class="">
                    <div class="flex flex-col gap-3 justify-start">
                        <div
                            class="card bg-white flex flex-row gap-2 px-5 py-5 mt-2 rounded-lg shadow-lg items-center justify-center">
                            <img src="/assets/sapi.png" class="w-[60px] h-[60px] rounded-full" alt="">
                            <div class="flex flex-col gap-2">
                                <strong class="text-sm"> Peternakan Pak Pak Rahmat</strong>
                                <p class="  text-foreground text-sm">Menjual sapi dengan dengan kualitas
                                    paling terbaik di sleman
                                </p>
                            </div>
                        </div>
                        <div
                            class="card bg-white flex flex-row gap-2 px-5 py-5 mt-2 rounded-lg shadow-lg items-center justify-center">
                            <img src="/assets/sapi.png" class="w-[60px] h-[60px] rounded-full" alt="">
                            <div class="flex flex-col gap-2">
                                <strong class="text-sm"> Peternakan Pak Pak Rahmat</strong>
                                <p class="  text-foreground text-sm">Menjual sapi dengan dengan kualitas
                                    paling terbaik di sleman
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>


</html>