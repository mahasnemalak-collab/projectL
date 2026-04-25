<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series of Numbers Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @tailwind base;
@tailwind components;
@tailwind utilities;

.carousel {
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
}

.carousel-item {
    flex: 0 0 100%;
    scroll-snap-align: start;
}
    </style>
</head>
<body class="bg-[url('{{asset('img/earth.jpg')}}')]  bg-cover bg-center flex flex-col">
    <x-navbar></x-navbar>
    
    <div class="flex items-center justify-center flex-grow mt-10 ml-40">
        <div class="bg-white bg-opacity-80 backdrop-blur-md rounded-lg shadow-lg p-6 w-96">
        <div class="relative">
    <div class="carousel max-w-xl flex">
        <!-- Carousel items -->
        <div class="carousel-item">
            <img src="{{asset('img/uae2.jpg')}}" alt="Carousel Image 1"
                class="w-full h-96 object-cover">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/uae.jpg')}}" alt="Carousel Image 2"
                class="w-full h-96 object-cover">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/uae1.jpg')}}" alt="Carousel Image 3"
                class="w-full h-96 object-cover">
        </div>
    </div>

    <!-- Carousel controls -->
    <div class="absolute inset-y-0 left-0 flex items-center justify-start pl-4">
        <button
            class="carousel-control-prev bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center justify-end pr-4">
        <button
            class="carousel-control-next bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <form action="/test/games/countrypost" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <label for="c" class="block text-lg font-semibold mb-2">Guess the Country</label>
        <select name="country" id="c" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            <option value="s">Syria</option>
            <option value="ua">United States</option>
            <option value="uae">United Arab Emirates</option>
        </select>
        <button type="submit" class="mt-4 w-full bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Submit
        </button>
    </form>
    @if (session('message34'))
                        <div class="alert alert-info">
                            {{ session('message34') }}
                        </div>
    @endif
</div>

        </div>
    </div>



    <script>
    const carousel = document.querySelector('.carousel');
    const prevButton = document.querySelector('.carousel-control-prev');
    const nextButton = document.querySelector('.carousel-control-next');

    prevButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: -carousel.offsetWidth,
            behavior: 'smooth'
        });
    });

    nextButton.addEventListener('click', () => {
        carousel.scrollBy({
            left: carousel.offsetWidth,
            behavior: 'smooth'
        });
    });
</script>

</body>
</html>
