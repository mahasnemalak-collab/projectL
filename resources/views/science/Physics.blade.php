<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
<x-navbar></x-navbar>
    @if (session('message321'))
    <div class="flex justify-center">
        <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
            {{ session('message321') }}
        </div>
    </div>
@endif

<div class="flex space-x-5 text-center flex items-center justify-center min-h-screen bg-blue-300 ">
        <!-- First Table -->
        <table class="border border-gray-400 bg-white shadow-md w-full m-5 border-blue-500 border-8">
            <tbody>
                <tr class="border-b border-gray-300 ">
                    <td class="p-4 text-center">1- kg</td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center">2- N</td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center">3- S</td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center">4- M</td>
                </tr>
            </tbody>
        </table>

        <!-- Second Table -->
        <table class="border border-gray-400 bg-white shadow-md w-full mr-5 border-blue-500 border-8">
        <form action="/test/Science/Physics/post" method="POST">
            @csrf
            <tbody>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center hover:bg-gray-200">
                        <select name="option1" id="">
                            <option value="1">Speed</option>
                            <option value="2">Force</option>
                            <option value="3">Mass</option>
                        </select>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center hover:bg-gray-200">
                        <select name="option2" id="">
                            <option value="1">Speed</option>
                            <option value="2">Force</option>
                            <option value="3">Mass</option>
                        </select>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center hover:bg-gray-200">
                        <select name="option3" id="">
                            <option value="1">Time</option>
                            <option value="2">Force</option>
                            <option value="3">Mass</option>
                        </select>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="p-4 text-center hover:bg-gray-200">
                        <select name="option4" id="">
                            <option value="1">Speed</option>
                            <option value="2">Time</option>
                            <option value="3">Length</option>
                        </select>
                    </td>
                </tr>
                <!-- Submit Button -->
                <tr>
                    <td class="p-4 text-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
                    </td>
                </tr>
            </tbody>
        </form>

        </table>

       
    </div>
    </div>
 
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>