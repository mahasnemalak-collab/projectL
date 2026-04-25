<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    
<div class="w-full h-screen bg-gray-100 dark:bg-gray-800">
    <div class="w-full h-full  flex flex-wrap justify-center items-center gap-2">
        
        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-white shadow-lg flex justify-center items-center overflow-hidden">
                            <img src="{{ asset('img/Clock.jpg') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    write the hours and the seconds  
                </h1>
                <form action="/test/Clock/c1" method="POST">
                    @csrf
                    <label for="">Hours</label>
                    <input type="number" name="h1" class="bg-gray-100 mb-2">
                    <label for="">Seconds</label>
                    <input type="number" name="s1" class="bg-gray-100 mb-2">

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-white rounded-3xl px-4 py-2">submit</button>
                    @if (session('message11'))
                        <div class="alert alert-info">
                            {{ session('message11') }}
                        </div>
                    @endif
                </form>

               </div>

        </div>

        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-white shadow-lg flex justify-center items-center overflow-hidden">
                            <img src="{{ asset('img/clock2.png') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    write the hours and the seconds  
                </h1>
                <form action="/test/Clock/c2" method="POST">
                    @csrf
                    <label for="">Hours</label>
                    <input type="number" name="h2" class="bg-gray-100 mb-2">
                    <label for="">Seconds</label>
                    <input type="number" name="s2" class="bg-gray-100 mb-2">

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-white rounded-3xl px-4 py-2">submit</button>
                    @if (session('message22'))
                        <div class="alert alert-info">
                            {{ session('message22') }}
                        </div>
                    @endif
                </form>

               </div>

        </div>

        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-white shadow-lg flex justify-center items-center overflow-hidden">
                            <img src="{{ asset('img/clock3.png') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    write the hours and the seconds  
                </h1>
                <form action="/test/Clock/c3" method="POST">
                    @csrf
                    <label for="">Hours</label>
                    <input type="number" name="h3" class="bg-gray-100 mb-2">
                    <label for="">Seconds</label>
                    <input type="number" name="s3" class="bg-gray-100 mb-2">

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-white rounded-3xl px-4 py-2">submit</button>
                    @if (session('message33'))
                        <div class="alert alert-info">
                            {{ session('message33') }}
                        </div>
                    @endif
                </form>

               </div>

        </div>
   
        
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>