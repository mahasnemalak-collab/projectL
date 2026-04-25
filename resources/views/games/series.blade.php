<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series of Numbers Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('{{asset('img/sunny2.jpg')}}')]  bg-cover bg-center flex flex-col">
    <x-navbar></x-navbar>
                    @php
                       $randomNumber1 = rand(1, 9);
                    @endphp
    <div class="flex flex-col items-center justify-center flex-grow mt-60">
        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">{{$randomNumber1}}</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold"></div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">{{$randomNumber1*3}}</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">{{$randomNumber1*4}}</div>
        </div>

        <form class="flex space-x-4" method="POST" action="/test/games/s1">
            @csrf <!-- Include CSRF token for security -->
            <input type="hidden" value="{{$randomNumber1*2}}" name="correct_answer"> <!-- This is the correct answer -->
            <input type="submit" value="{{$randomNumber1*2}}" class="bg-blue-500 text-white rounded px-6 py-3 text-2xl font-bold cursor-pointer" name="selected_value">
            <input type="submit" value="{{$randomNumber1*1}}" class="bg-blue-500 text-white rounded px-6 py-3 text-2xl font-bold cursor-pointer" name="selected_value">
            <input type="submit" value="{{$randomNumber1*0.3}}" class="bg-blue-500 text-white rounded px-6 py-3 text-2xl font-bold cursor-pointer" name="selected_value">
            <input type="submit" value="{{$randomNumber1*6}}" class="bg-blue-500 text-white rounded px-6 py-3 text-2xl font-bold cursor-pointer" name="selected_value">
        </form>
    </div>
    @if(session('message31'))
    <div class="mt-4 p-4 border rounded-lg bg-green-100 border-green-400 text-green-700 ">
        {{ session('message31') }}
    </div>
@endif


</body>
</html>
