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
   <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-32">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Subject</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Response</th>
            </tr>
        </thead>
        <tbody class="bg-white">
          @foreach($contacts as $contact)
            
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">{{$contact->email}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{$contact->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{$contact->subject}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        @if(!empty($contact->checkresponse))
                          {{$contact->response}}
                          
                        @else
                           <form action="/Replayadmin" method="POST">
                               @csrf
                               <input type="text" name="replay" class="bg-gray-300">
                               <input type="number" name="id" value="{{$contact->id}}" class="bg-gray-300" hidden>
                               <button type="submit">submit</button>
                           </form>
                        @endif
                        
                    </td>
                    
                </tr>
              
            
          @endforeach
            <!-- Add more rows here -->
        </tbody>
    </table>
</div>
</body>
</html>