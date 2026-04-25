<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<div class="bg-gradient-to-br from-purple-700 to-pink-500 min-h-screen flex flex-col justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">
        <h1 class="text-4xl font-bold text-center text-purple-700 mb-8">Welcome to My Website</h1>
        <form  action="/login" method="POST" class="space-y-6"  >
            @csrf
        <div>
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    name
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="name" name="name"
                    type="name">
                @error('name')
                   {{$message}}
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="email" name="email"
                    type="email">
                @error('email')
                   {{$message}}
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password"
                    type="password">
                @error('password')
                   {{$message}}
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    age
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="age" name="age" type="number" placeholder="Between 3 and 12">
               
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">
                    Password_confirmation
                </label>
                <input class="w-full px-4 py-2 rounded-lg border border-gray-400" id="password" name="password_confirmation"
                    type="password_confirmation">
            </div>
            <div>

                <button type="submit" class="w-full bg-purple-700 hover:bg-purple-900 text-white font-bold py-2 px-4 rounded-lg">
                    Log In
                </button>
            </div>

        </form>
        <a href="/parent" class="text-red-800 hover:text-red-600"> are you a parent?</a>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>