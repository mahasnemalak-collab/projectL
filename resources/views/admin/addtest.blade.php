<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-500">

 <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
        Add a test
    </div>
    <form class="py-4 px-6" action="/addtest" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
                Type
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="phone" name="type" type="text" placeholder="Enter your phone number">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
                Discription 
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="date" name="dis" type="text">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
               Age
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="time" name="age" type="number">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="image">
                Upload Image
            </label>
            <input
                class="block w-full text-sm text-gray-700 border border-gray-300 rounded py-2 px-3 focus:outline-none focus:shadow-outline"
                id="image" name="image" type="file" accept="image/*">
        </div>
        <div class="flex items-center justify-center mb-4">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
                Add the test
            </button>
        </div>

         <a href="/addtest/showcourses"
                    class=" ml-32 border-2 text-md mt-5 rounded-md py-2 px-4 bg-purple-600 hover:bg-blue-700 text-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600">
                    show our courses
          </a>
    </form>
</div>

</body>
</html>
