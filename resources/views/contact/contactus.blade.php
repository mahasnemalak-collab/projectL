<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    
   <div class="h-screen bg-gray-800">
    <div class="pt-10 md:pt-20">
        <div class="p-4 md:p-8">
            <h1 class="text-white text-center pb-8 font-light text-4xl md:text-5xl lg:text-6xl">Contact Me</h1>
            <form class="flex flex-col items-center" action="/Contact_Us/post" method="POST">
                @csrf
                <div class="md:w-3/4 lg:w-2/3 xl:w-1/2">
                    <div class="flex flex-col md:flex-row">
                        <input id="name" type="text" name='name'
                            class="my-2 py-2 px-4 rounded-md bg-gray-900 text-gray-300 w-full md:w-1/2 md:mr-2 outline-none focus:ring-2 focus:ring-blue-600"
                            placeholder="Name">
                        <input id="email" type="email" name='email'
                            class="my-2 py-2 px-4 rounded-md bg-gray-900 text-gray-300 w-full md:w-1/2 md:ml-2 outline-none focus:ring-2 focus:ring-blue-600"
                            placeholder="Email">
                    </div>
                    <input id="subject" type="text" placeholder="Subject" name='subject'
                        class="my-2 py-2 px-4 rounded-md bg-gray-900 text-gray-300 w-full outline-none focus:ring-2 focus:ring-blue-600">
                    <textarea id="message" rows="5" placeholder="Say Something" name='message'
                        class="my-2 py-2 px-4 rounded-md bg-gray-900 text-gray-300 w-full outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                </div>
                <button
                   type='submit'
                    class="border-2 text-md mt-5 rounded-md py-2 px-4 bg-blue-600 hover:bg-blue-700 text-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600">
                    Send Message
                </button>
                <a href="/Contact_Us/check"
                    class="border-2 text-md mt-5 rounded-md py-2 px-4 bg-purple-600 hover:bg-blue-700 text-gray-100 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600">
                    check Response
                </a>
                
            </form>
           
        </div>
    </div>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>