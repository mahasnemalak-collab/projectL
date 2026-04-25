<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce User Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-blue-500 font-sans min-h-screen">
    <x-navbar></x-navbar>
   <!-- <a href="/addtest/showcourses"
                    class="mt-24 ml-10 border-2 text-md  rounded-md py-2 px-4 bg-purple-600 hover:bg-blue-700 text-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600">
                    show our courses
          </a> -->
   <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-32">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">mathematics</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">clock</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Langauge</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Science</th>
            
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">contact</th>
            </tr>
        </thead>
        <tbody class="bg-white">
        @if($user)
          @foreach($degrees as $contact)
            
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">{{$contact->email}}
                       
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate pr-5">
                        @if($contact->mathematics)
                           yes 
                        @else
                           no 
                        @endif

                    </td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">
                        @if($contact->Clock)
                           yes 
                        @else
                           no 
                        @endif
                    </td>
                   
                    <td class="py-4 px-6 border-b border-gray-200">
                          @if($contact->Language)
                           yes 
                        @else
                           no 
                        @endif
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        @if($contact->Science)
                           yes 
                        @else
                           no 
                        @endif
                    </td>
          
                    <td class="py-4 px-6 border-b border-gray-200">
                        
                           <form action="/sendSimilar" method="POST">
                               @csrf
                               <input type="text" name="replay" class="bg-gray-300">
                               <input type="text" name="email" value="{{$contact->email}}" class="bg-gray-300" hidden>
                        
                               <button type="submit">submit</button>
                           </form>
                        
                    </td>
                    
                </tr>
              
            
          @endforeach
            <!-- Add more rows here -->
        @else
           <h2 class="py-4 px-6 border-b border-gray-200 truncate">there is no similar useres</h2>
        @endif
        </tbody>
    </table>
</div>
</body>
</html>