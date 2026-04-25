
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="">
<x-navbar></x-navbar>
    @if (session('messageklk'))
    <div class="flex justify-center">
        <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
            {{ session('messageklk') }}
        </div>
    </div>
@endif

<div class="flex space-x-5 text-center flex items-center justify-center min-h-screen bg-[url('{{asset('img/understanding_expert.jpg')}}')] bg-cover bg-center ">
        
    <div class=" flex items-center justify-center w-1/2 p-6 bg-white shadow-lg rounded-lg text-center">
        <audio controls class="mx-auto">
            <source src="{{asset('audio/expert.ogg')}}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <form action="/test/Understanding-speaking/understanding_expert/post" method="POST" class="mt-4">
          @csrf
            <label for="listeningInput" class="block text-lg font-semibold">What did you hear?</label>
            <input type="text" name="option1">
            <button type="submit" class="w-full mt-4 bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>

     

       
    
</div>
 
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>