<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    
        <?php
    // Step 1: Define the alphabet
     // You can include uppercase letters if needed
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Step 2: Generate a random index
    $randomIndex1 = rand(0, strlen($alphabet) - 1);

    // Step 3: Select the random letter
    $randomLetter1 = $alphabet[$randomIndex1];

    
    ?>
    <div class="w-full h-screen bg-gray-100 dark:bg-gray-800">
    <div class="max-w-3xl mx-auto text-center mt-2">
    <h1 class="text-4xl font-bold text-gray-900 leading-tight  border-t-4 border-b-4 border-purple-600 py-4">
    {{Session::get('finishmath1');}}
    </h1>
    
    </div>
    <div class="w-full h-full  flex flex-wrap justify-center items-center gap-2">
        
        <div
                    class="w-[20rem] mx-auto flex flex-col gap-2 px-4 border border-gray-300 border-gray-300 rounded-lg bg-white dark:bg-gray-900">
                    <div class="w-full flex justify-center items-center mb-10">
                        <span id="letter" class="text-6xl w-[8rem] h-[8rem] rounded-full outline outline-offset-2 outline-1 outline-purple-400 shadow-lg flex justify-center items-center -mt-[4rem]">
                        {{ $randomLetter1}}
                        </span>
                    </div>

                    <script>
                        // Function to hide the letter after 20 seconds
                        setTimeout(function() {
                            document.getElementById('letter').style.display = 'none';
                        }, 2500); // 20000 milliseconds = 20 seconds
                    </script>
                <div class=" w-full h-full text-center flex flex-col gap-4 relative -top-10">
                <h1 class="uppercase text-lg font-semibold dark:text-white">
                    Select the letter
                </h1>
                <form action="/test/Language/test1" method="POST">
                    @csrf
                    <select name="letter" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select a letter</option>
                        @for ($i = ord('A'); $i <= ord('Z'); $i++)
                            <option value="{{ chr($i) }}">{{ chr($i) }}</option>
                        @endfor
                    </select>
                    <input type="text" hidden value=" {{ $randomLetter1}}" name="letter2">
                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-white rounded-3xl px-4 py-2">submit</button>
                    @if (session('message3'))
                        <div class="alert alert-info">
                            {{ session('message3') }}
                        </div>
                    @endif
                </form>

               </div>

        </div>
   
        
    </div>

</div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>