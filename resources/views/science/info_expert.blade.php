<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-purple-100">
    <x-navbar></x-navbar>
    @if (session('message123'))
    <div class="flex justify-center">
        <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
            {{ session('message123') }}
        </div>
    </div>
@endif

    <form method="POST" action="/test/Science/info_expert/post">
         @csrf

        <div class="grid grid-cols-3 grid-rows-1 gap-4 items-center mt-10">
            <!-- Form Selects -->
            <select class="border p-2 rounded col-span-1 row-span-1" name="option1">
            <option value="" disabled selected>1</option>
                <option value="1">Shoulder</option>
                <option value="2">Feet</option>
                <option value="3">Knee</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option2">
            <option value="" disabled selected>2</option>
                <option value="1">Finger</option>
                <option value="2">Armpit</option>
                <option value="3">Feet</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option3">
            <option value="" disabled selected>3</option>
                <option value="1">Stomach</option>
                <option value="2">Feet</option>
                <option value="3">Heart</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option4">
            <option value="" disabled selected>4</option>
                <option value="1">Knee</option>
                <option value="2">Feet</option>
                <option value="3">Finger</option>
            </select>
            
            <!-- Center Image -->
            <img src="{{asset('img/parts.jpg')}}" alt="Centered Image" class="col-span-1 row-span-1 border-purple-400 border-8">
            
            <!-- More Form Selects -->
            <select class="border p-2 rounded col-span-1 row-span-1" name="option5">
            <option value="" disabled selected>5</option>
                <option value="1">Stomach</option>
                <option value="2">Finger</option>
                <option value="3">Feet</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option6">
            <option value="" disabled selected>6</option>
                <option value="1">Armpit</option>
                <option value="2">Bladder</option>
                <option value="3">Feet</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option7">
            <option value="" disabled selected>7</option>
                <option value="1">Knee</option>
                <option value="2">Bladder</option>
                <option value="3">Feet</option>
            </select>
            <select class="border p-2 rounded col-span-1 row-span-1" name="option8">
            <option value="" disabled selected>9</option>
                <option value="1">Armpit</option>
                <option value="2">Heart</option>
                <option value="3">Feet</option>
            </select>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
                Submit
            </button>
        </div>
    </form>
 
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>