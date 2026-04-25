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
<body class="bg-purple-500 font-sans min-h-screen">
     <x-navbar></x-navbar>
   <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-32">
    <table class="w-full table-fixed">
        <thead>
            <tr class="bg-gray-100">
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Name</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">subject</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">message</th>
                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Response</th>
            </tr>
        </thead>
        <tbody class="bg-white">
          @foreach($contacts as $c)
           
              @if($c->email == Session::get('email'))
                <tr>
                    <td class="py-4 px-6 border-b border-gray-200">{{$c->name}}</td>
                    <td class="py-4 px-6 border-b border-gray-200 truncate">{{$c->email}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{$c->subject}}</td>
                    <td class="py-4 px-6 border-b border-gray-200">{{$c->message}}</td>
                    @if(empty($c->response))
                      
                       <td class="py-4 px-6 border-b border-gray-200">not responsed yet</td>
                    @else
                    <td class="py-4 px-6 border-b border-gray-200">{{$c->response}}</td>
                    @endif
                </tr>
              @endif
            
          @endforeach
            <!-- Add more rows here -->
        </tbody>
    </table>
</div>
</body>
</html>