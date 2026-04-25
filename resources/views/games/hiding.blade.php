<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #questions {
        visibility: hidden; /* Start as hidden */
    }
</style>
</head>
<body class="bg-purple-200">
    <x-navbar></x-navbar>
      <p>{{Session('finishguess1')}}</p>
<div class="w-full h-screen ">
<div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
    <div class="text-center mb-10">
        <h2 class="text-4xl tracking-tight font-bold text-primary-800 animate-bounce">Determine what inside the image</h2>
    </div>

    <div class="flex flex-col md:flex-row">
        <!-- can help image -->
        <div class="md:w-1/2 flex justify-end items-center">
        <img id="letter" class="w-full md:w-300 h-auto object-cover" src="{{asset('img/hiding.jpg')}}" alt="can_help_banner">
    </div>
        <!-- end can help image -->
        <script>
    // Function to unhide the letter after 5.5 seconds
        setTimeout(function() {
            document.getElementById('questions').style.visibility = 'visible';
        }, 5100); // 5500 milliseconds = 5.5 seconds
      </script>

        <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2  bg-white" id="questions">
            <form action="/test/games/hidingpost" method="POST" class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2 ">
                @csrf
            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                    <h3 class="text-2xl font-bold text-md mb-6">How Many trees are there?</h3>
                     <select name="tree" >
                        <option value="" disabled selected>number of tress</option>

                        <option value="zero">0</option>
                        <option value="one">1</option>
                        <option value="two">2</option>
                     </select>
                </div>
            </div>
            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                    <h3 class="text-2xl font-bold text-md mb-6">is there a river?</h3>
                    <select name="river" >
                    <option value="" disabled selected>is there a river</option>
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                     </select>
                </div>
            </div>

            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                    <h3 class="text-2xl font-bold text-md mb-6">is there a cloud?</h3>
                    <select name="cloud" >
                    <option value="" disabled selected>is there a cloud</option>
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                     </select>
                </div>
            </div>

            <div class="w-full sm:w-1/2 mb-4 px-2 ">
                <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                    <h3 class="text-2xl font-bold text-md mb-6">is there a cat?</h3>
                    <select name="cat" >
                    <option value="" disabled selected>is there a cat</option>
                        <option value="yes">yes</option>
                        <option value="no">no</option>
                     </select>
                </div>
            </div>
            <div class="w-full flex justify-center mt-6">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition duration-300">
                Submit
            </button>
        </div>
        @if (session('message35'))
                        <div class="alert alert-info">
                            {{ session('message35') }}
                        </div>
    @endif

            </form>
        </div>
    </div>
</div>
   
        
</div>

<script>
                        // Function to hide the letter after 20 seconds
                        setTimeout(function() {
                            document.getElementById('letter').style.display = 'none';
                        }, 5500); // 20000 milliseconds = 20 seconds
                    </script>



    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>