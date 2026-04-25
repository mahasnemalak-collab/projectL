<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rating Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body data-cmplz=2 class="bg-gray-100">
    <x-navbar></x-navbar>
  <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Filter by Date -->
    <div class="mb-6">
      <label for="date-filter" class="block text-sm font-medium text-gray-700">Filters</label>

      <form action="/Rate/new" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-purple-400 p-2 rounded-md hover:bg-purple-200">filter by the newest</button>
      </form>

      <form action="/Rate/mostlike" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-purple-500 p-2 rounded-md hover:bg-purple-200">filter by the most likes</button>
      </form>

      <form action="/Rate/mostdislike" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-purple-400 p-2 rounded-md hover:bg-purple-200">filter by the most dislikes</button>
      </form>
    </div>

    <!-- Rating Section -->
    @foreach($rates as $rate)
        <div class="mb-6 bg-purple-200 p-3">
        <h3>{{$rate->email}}</h3>
        <h2 class="text-lg font-semibold text-gray-800">{{$rate->rate}}</h2>
        <div class="flex items-center mt-2">
            @php
              $star = $rate->stars;
            @endphp
            @for($i=1; $i<=5 ;  $i++)
              @if($star != 0)
               <span class="text-yellow-400 text-2xl">★</span>
                @php
                  $star = $star-1;
                @endphp
              @else
               <span class="text-yellow-400 text-2xl">☆</span>
              @endif
             
            @endfor


        </div>
        <div class="like-dislike-container">
            <form action="/Rate/like" class="inline" method="POST">
                @csrf
                <input type="number" name="id" value="{{$rate->id}}" hidden>
                <button type="submit">👍 <span id="likeCount">{{$rate->like}}</span></button>
            </form>
             <form action="/Rate/dislike" class="inline" method="POST">
                @csrf
                <input type="number" name="id" value="{{$rate->id}}" hidden>
                <button type="submit">👎 <span id="likeCount">{{$rate->dislike}}</span></button>
            </form>
    
        </div>
        </div>
    @endforeach
    

    <!-- Add Rate Box -->
    <div>
      <h2 class="text-lg font-semibold text-gray-800">Add Your Rate</h2>
      <form action="/Rate/rates" method="POST">
        @csrf
        <input type="number" placeholder="enter the number if stars" name="stars" required>
        <div class="mt-2">
            <textarea
            class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            rows="3"
            placeholder="Write your review here..."
            name="rate"
            ></textarea>
        </div>
        <div class="mt-4">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Submit Rate
            </button>
        </div>
        </form>
    </div>
  </div>
</body>
</html>