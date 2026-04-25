<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex justify-center text-xl text-red-500 ">
        {{Session::get('finishmath1');}}
    </div>
    
<div class="flex justify-between bg-gray-100">
    
    <div class="rounded overflow-hidden shadow-lg pr-5 pl-5">
        <div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">
                    @php
                       $randomNumber1 = rand(1, 10);
                       $randomNumber2 = rand(1, 10);
                       $sum = $randomNumber1 + $randomNumber2;
                    @endphp
                    <div class="text-center pb-6">
                        <h1 class="text-3xl">
                        @php
                           echo  $randomNumber1;
                        @endphp
                        +
                        @php
                            echo $randomNumber2;
                        @endphp
                        =
                        </h1>
                        <p class="text-gray-300">Fill up the form below to send us a message.</p>
                    </div>
                    <form action="/test/mathematics/add1" method="POST">
                        @csrf
                        <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="SUM" name="add1">
                        <input type="number" hidden value="{{$sum}}" name="sum">
                        <button type="submit">submit</button>
                        @if (session('message'))
                            <div class="alert alert-info">
                                {{ session('message') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded overflow-hidden shadow-lg pr-5">
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">
                    @php
                    $randomNumber3 = rand(1, 20);
                    $randomNumber4 = rand(1, 10);
                    $sub = $randomNumber3 - $randomNumber4;
                    @endphp
                 <div class="text-center pb-6">
                     <h1 class="text-3xl">
                     
                       {{  $randomNumber3;}}
                     
                     -
                    
                        {{ $randomNumber4;}}
            
                     =
                     </h1>
                     <p class="text-gray-300">Fill up the form below to send us a message.</p>
                 </div>
                 <form action="/test/mathematics/sub1" method="POST">
                     @csrf
                     <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="SUM" name="sub1">
                     <input type="number" hidden value="{{$sub}}" name="sub">
                     <button type="submit">submit</button>
                     @if (session('message1'))
                         <div class="alert alert-info">
                             {{ session('message1') }}
                         </div>
                     @endif
                 </form>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded overflow-hidden shadow-lg pr-5">
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">
                    @php
                    $randomNumber5 = rand(1, 10);
                    $randomNumber6 = rand(1, 10);
                    $sum2 = $randomNumber5 + $randomNumber6;
                    @endphp
                 <div class="text-center pb-6">
                     <h1 class="text-3xl">
                     
                       {{  $randomNumber5;}}
                     
                     +
                    
                        {{ $randomNumber6;}}
            
                     =
                     </h1>
                     <p class="text-gray-300">Fill up the form below to send us a message.</p>
                 </div>
                 <form action="/test/mathematics/sum2" method="POST">
                     @csrf
                     <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="SUM" name="sum22">
                     <input type="number" hidden value="{{$sum2}}" name="sum2">
                     <button type="submit">submit</button>
                     @if (session('message2'))
                         <div class="alert alert-info">
                             {{ session('message2') }}
                         </div>
                     @endif
                 </form>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded overflow-hidden shadow-lg pr-5">
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">
                    @php
                    $randomNumber7 = rand(1, 20);
                    $randomNumber8 = rand(1, 10);
                    $sub2 = $randomNumber7 - $randomNumber8;
                    @endphp
                 <div class="text-center pb-6">
                     <h1 class="text-3xl">
                     
                       {{  $randomNumber7;}}
                     
                     -
                    
                        {{ $randomNumber8;}}
            
                     =
                     </h1>
                     <p class="text-gray-300">Fill up the form below to send us a message.</p>
                 </div>
                 <form action="/test/mathematics/sub2" method="POST">
                     @csrf
                     <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" placeholder="SUM" name="sub22">
                     <input type="number" hidden value="{{$sub2}}" name="sub2">
                     <button type="submit">submit</button>
                     @if (session('message3'))
                         <div class="alert alert-info">
                             {{ session('message3') }}
                         </div>
                     @endif
                 </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Repeat the above block for the second box -->
    <!-- Copy and paste the entire div with "rounded overflow-hidden shadow-lg", changing any necessary attributes or content -->

    <!-- Repeat again for the third box -->
</div>


        <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>