<!DOCTYPE html>
<html lang="en" x-data="{ search: '' }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce User Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-purple-500 font-sans min-h-screen">
   
   <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-20">
        
        <!-- Filter/Search Box -->
        <div class="bg-white p-4">
           <form action="/addtest/search" method="POST">
            @csrf
            <input 
                type="text" 
                name="search"
                placeholder="Search by test name..." 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400"
                x-model="search"
            >
            
            </form>
        </div>

        <!-- Table -->
        <table class="w-full table-fixed">
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                </tr>
            </thead>
            <tbody class="bg-white">
              @foreach($courses as $course)
                <tr 
                    x-show="'{{$course->type}}'.toLowerCase().includes(search.toLowerCase())"
                >
                    <td class="py-4 px-6 border-b border-gray-200">{{$course->type}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">
                        {{$course->dis}}

                        <form action="/addtest/edit" method="POST">
                            @csrf
                            <input type="number" name="id" value="{{$course->id}}" hidden>
                            <input type="text" placeholder="enter discription" name="dis">
                            <button type="submit">Edit</button>
                        </form>

                        <form action="/addtest/delete" method="POST">
                            @csrf
                            <input type="number" name="id" value="{{$course->id}}" hidden>
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
