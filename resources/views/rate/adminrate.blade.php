<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rating Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body data-cmplz=2 class="bg-gray-100">

  <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Filter by Date -->
    <div class="mb-6">
      <label for="date-filter" class="block text-sm font-medium text-gray-700">Filters</label>

      <form action="/showrates/new" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-purple-400 p-2 rounded-md hover:bg-purple-200">filter by the newest</button>
      </form>

      <form action="/showrates/mostlike" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-purple-500 p-2 rounded-md hover:bg-purple-200">filter by the most likes</button>
      </form>

      <form action="/showrates/mostdislike" method="POST" class="inline">
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
            <form  class="inline" >
                
                <input type="number" name="id" value="{{$rate->id}}" hidden>
                <button >👍 <span id="likeCount">{{$rate->like}}</span></button>
            </form>
             <form  class="inline" >
                
                <input type="number" name="id" value="{{$rate->id}}" hidden>
                <button >👎 <span id="likeCount">{{$rate->dislike}}</span></button>
            </form>
    
        </div>
        </div>
    @endforeach
    

   
  </div>
</body>
</html>