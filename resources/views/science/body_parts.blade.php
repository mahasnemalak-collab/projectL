<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <x-navbar></x-navbar>
      <p>{{Session('finishguess1')}}</p>
<div class="w-full h-screen bg-blue-200 dark:bg-gray-800">
    <div class="w-full h-full  flex flex-wrap justify-center items-center gap-2">
        
        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-white shadow-lg flex justify-center items-center overflow-hidden">
                            <img src="{{ asset('img/hand.jpg') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    Choose the correct geomertic shape  
                </h1>
                <form action="/test/Science/body_parts/s1" method="POST">
                    @csrf
                    <label for="">Select body parts</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select body parts</option>
                            <option value="leg">Leg</option>
                            <option value="Hand">Hand</option>
                            <option value="skin">Skine</option>
                            <option value="feet">Feet</option>
                        
                    </select>

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
                            <img src="{{ asset('img/feet.jpg') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                   Choose the correct geomertic shape  
                </h1>
                <form action="/test/Science/body_parts/s2" method="POST">
                    @csrf
                    <label for="">Select body parts</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select body parts</option>
                            <option value="leg">Leg</option>
                            <option value="Hand">Hand</option>
                            <option value="skin">Skine</option>
                            <option value="feet">Feet</option>
                        
                    </select>

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
                            <img src="{{ asset('img/mouth.jpg') }}" alt="" class="w-full h-full object-cover">
                        </span>
                    </div>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                     Choose the correct geomertic shape  
                </h1>
                <form action="/test/Science/body_parts/s3" method="POST">
                    @csrf
                    <label for="">Select body parts</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select body parts</option>
                            <option value="leg">Leg</option>
                            <option value="Hand">Hand</option>
                            <option value="skin">Skine</option>
                            <option value="feet">Feet</option>
                        
                    </select>

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