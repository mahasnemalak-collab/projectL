<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    
    @if(Session::get('age')>=3 && Session::get('age')<=6)
        <div class="w-full bg-purple-200 flex items-center justify-center min-h-full p-2">
            <div class="container max-w-6xl">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Table Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">your result</h2>
                        <p class="text-gray-500 mt-1">Manage your result.</p>
                    </div>
                
                    </div>
                
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Language

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            clock
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           Guess the sample
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           body parts
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                           understanding kids
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                           Translate kids 
                        </th>
                       
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($degrees as $degree)
                                @if($degree['email'] == Session::get('email'))
                                    {{ $degree->Language }}<span class="text-red-600">/1</span>
                                    @php
                                      $res11=$degree->Language;
                                    @endphp

                                @endif
                            @endforeach

                            
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           @foreach($degrees as $degree)
                                @if($degree['email'] == Session::get('email'))
                                    {{ $degree->Clock }}<span class="text-red-600">/3</span>
                                    @php
                                      $res12=$degree->Clock;
                                    @endphp

                                @endif
                            @endforeach
                            
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           @foreach($games as $game)
                                @if($game['email'] == Session::get('email'))
                                    {{ $game->guess_the_sample }}<span class="text-red-600">/3</span>
                                    @php
                                      $res13=$game->guess_the_sample;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($sciences as $science)
                                @if($science['email'] == Session::get('email'))
                                    {{ $science->body_parts }}<span class="text-red-600">/3</span>
                                    @php
                                      $res14=$science->body_parts;
                                    @endphp
                                    
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            @foreach($speaks as $speak)
                                @if($speak['email'] == Session::get('email'))
                                    {{ $speak->understanding_kids }}<span class="text-red-600">/1</span>
                                    @php
                                      $res15=$speak->understanding_kids;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                         <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            
                            @foreach($translates as $t)
                                @if($t['email'] == Session::get('email'))
                                    {{ $t->Translation_kids }}<span class="text-red-600">/1  </span>
                                    @php
                                      $res20=$t->Translation_kids;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        
                    </tbody>
                    </table>
                </div>
                    @if (session('language'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('color') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need languae course
                            </div>
                        </div>
                    @endif
                    @if (session('games1'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('games1') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need arrention course
                            </div>
                        </div>
                    @endif
                    @if (session('science'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('science') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need science course
                            </div>
                        </div>
                    @endif
                    @if (session('speaking1'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('speaking1') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need speaking course
                            </div>
                        </div>
                    @endif
                    @if (session('clock'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('clock') }}
                            </div>
                        </div>
                    @endif
                    @if (session('tran'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('tran') }}
                            </div>
                        </div>
                    @endif
                        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
                            <form action="/show_your_result/res1" method="POST">
                                @csrf
                                <input type="number" hidden name="res11" value={{$res11}}>
                                <input type="number" hidden name="res12" value={{$res12}}>
                                <input type="number" hidden name="res13" value={{$res13}}>
                                <input type="number" hidden name="res14" value={{$res14}}>
                                <input type="number" hidden name="res15" value={{$res15}}>
                                <input type="number" hidden name="res20" value={{$res20}}>
                                <div class="text-right">
                                    <button class="py-3 px-8 bg-blue-500 text-green-100 font-bold rounded" type="submit">Check what 
                                        courses you should take 
                                    </button>
                                </div>
                            </form>
            </div>
                
            
                
            </div>
        </div>
    @elseif(Session::get('age')>6 && Session::get('age')<=9)
        <div class="w-full bg-purple-200 flex items-center justify-center min-h-full p-2">
            <div class="container max-w-6xl">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Table Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">your result</h2>
                        <p class="text-gray-500 mt-1">Manage your result.</p>
                    </div>
                
                    </div>
                
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Language high level

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Guess the country 
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Hiding image
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Info inter
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        physics
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Chemistry
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                        understanding_inter

                        </th>
                          <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                           translate intermidiate

                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($degrees as $degree)
                                @if($degree['email'] == Session::get('email'))
                                    {{ $degree->Science }}<span class="text-red-600">/1</span>
                                    @php
                                      $res21=$degree->Science;
                                    @endphp
                                    

                                @endif
                            @endforeach
                            
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($games as $game)
                                @if($game['email'] == Session::get('email'))
                                    {{ $game->guess_the_country }}<span class="text-red-600">/1</span>
                                    @php
                                      $res22=$game->guess_the_country;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           @foreach($games as $game)
                                @if($game['email'] == Session::get('email'))
                                    {{ $game->hiding_img }}<span class="text-red-600">/1</span>
                                    @php
                                      $res23=$game->hiding_img;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($sciences as $science)
                                @if($science['email'] == Session::get('email'))
                                    {{ $science->info_inter }}<span class="text-red-600">/1</span>
                                    @php
                                      $res24=$science->info_inter;
                                    @endphp
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($sciences as $science)
                                @if($science['email'] == Session::get('email'))
                                    {{ $science->Physics }}<span class="text-red-600">/1</span>
                                    @php
                                      $res25=$science->Physics;
                                    @endphp
                                    
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($sciences as $science)
                                @if($science['email'] == Session::get('email'))
                                    {{ $science->Chemistry }}<span class="text-red-600">/1</span>
                                    @php
                                      $res26=$science->Chemistry;
                                    @endphp
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            @foreach($speaks as $speak)
                                @if($speak['email'] == Session::get('email'))
                                    {{ $speak->understanding_intermediate }}<span class="text-red-600">/1</span>
                                    @php
                                      $res27=$speak->understanding_intermediatey;
                                    @endphp
                                @endif
                            @endforeach
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            
                            @foreach($translates as $t)
                                @if($t['email'] == Session::get('email'))
                                    {{ $t->Translation_intermidate }}<span class="text-red-600">/1  </span>
                                    @php
                                      $res40 =$t->Translation_intermidate;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        
                    </tbody>
                    </table>
                </div>
                
            
                
            </div>
        </div>
        <!-- https://codepen.io/simonwpt-the-typescripter/embed/RwGrRXq -->
        <div class="bg-gray-100 mt-36 flex items-center p-24">
        @if (session('color'))
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    {{ session('color') }}
                </div>
            </div>
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                   you need langauge course
                </div>
            </div>
        @endif
        @if (session('games'))
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    {{ session('games') }}
                </div>
            </div>
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    you need attintion course
                </div>
            </div>
        @endif
        @if (session('science'))
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    {{ session('science') }}
                </div>
            </div>
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    you need science course
                </div>
            </div>
        @endif
        @if (session('speaking'))
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    {{ session('speaking') }}
                </div>
            </div>
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    you need listing course
                </div>
            </div>
        @endif

        @if (session('transs'))
            <div class="flex justify-center">
                <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                    {{ session('transs') }}
                </div>
            </div>
          
        @endif
            <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
                <form action="/show_your_result/res2" method="POST">
                    @csrf
                    <input type="number" hidden name="res21" value={{$res21}}>
                    <input type="number" hidden name="res22" value={{$res22}}>
                    <input type="number" hidden name="res23" value={{$res23}}>
                    <input type="number" hidden name="res24" value={{$res24}}>
                    <input type="number" hidden name="res25" value={{$res25}}>
                    <input type="number" hidden name="res26" value={{$res26}}>
                    <input type="number" hidden name="res27" value={{$res27}}>
                    <input type="number" hidden name="res40" value={{$res40}}>
                    <div class="text-right">
                        <button class="py-3 px-8 bg-blue-500 text-green-100 font-bold rounded" type="submit">Check what 
                            courses you should take 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="w-full bg-purple-200 flex items-center justify-center min-h-full p-2">
            <div class="container max-w-6xl">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Table Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">your result</h2>
                        <p class="text-gray-500 mt-1">Manage your result.</p>
                    </div>
                
                    </div>
                
                
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            math

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           discrate_words
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           series_numbers
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           information expert
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           understanding_expert

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           translate_expert

                        </th>
                       
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($degrees as $degree)
                                @if($degree['email'] == Session::get('email'))
                                    {{ $degree->mathematics }}<span class="text-red-600">/1</span>
                                    @php
                                      $res31=$degree->mathematics;
                                    @endphp
                                @endif
                            @endforeach

                            
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           @foreach($games as $game)
                                @if($game['email'] == Session::get('email'))
                                    {{ $game->discrate_words }}<span class="text-red-600">/3</span>
                                    @php
                                      $res32=$game->discrate_words;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                           @foreach($games as $game)
                                @if($game['email'] == Session::get('email'))
                                    {{ $game->series_numbers }}<span class="text-red-600">/3</span>
                                    @php
                                      $res33=$game->series_numbers;
                                    @endphp
                                    
                                @endif
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach($sciences as $science)
                                @if($science['email'] == Session::get('email'))
                                    {{ $science->info_expert }}<span class="text-red-600">/3</span>
                                    @php
                                      $res34=$science->info_expert;
                                    @endphp
                                    
                                @endif
                            @endforeach
                           
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            @foreach($speaks as $speak)
                                @if($speak['email'] == Session::get('email'))
                                    {{ $speak->understanding_expert }}<span class="text-red-600">/1</span>
                                    @php
                                      $res35=$speak->understanding_expert;
                                    @endphp
                                @endif
                            @endforeach
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            
                            @foreach($translates as $t)
                                @if($t['email'] == Session::get('email'))
                                    {{ $t->Translation_expert }}<span class="text-red-600">/1  </span>
                                    @php
                                      $res36 =$t->Translation_expert;
                                    @endphp
                                    
                                @else
                                     @php
                                      $res36 =0;
                                    @endphp
                                @endif
                            @endforeach
                        </td>
                        </tr>
                        
                    </tbody>
                    </table>
                    </div>
                    @if (session('math'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('math') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need math course
                            </div>
                        </div>
                    @endif
                    @if (session('games3'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('games3') }}
                            </div>

                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need a attention course
                            </div>
                            
                        </div>
                    @endif
                    @if (session('science3'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('science3') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need science course
                            </div>
                        </div>
                    @endif
                    @if (session('speaking3'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('speaking3') }}
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                you need speaking course
                            </div>
                        </div>
                    @endif
                     @if (session('transexpert'))
                        <div class="flex justify-center">
                            <div class="alert alert-info bg-blue-100 border border-blue-500 text-blue-800 p-4 rounded-lg shadow-md w-1/2 text-center">
                                {{ session('transexpert') }}
                            </div>
                        </div>
                      
                    @endif
                        <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
                            <form action="/show_your_result/res3" method="POST">
                                @csrf
                                <input type="number" hidden name="res31" value={{$res31}}>
                                <input type="number" hidden name="res32" value={{$res32}}>
                                <input type="number" hidden name="res33" value={{$res33}}>
                                <input type="number" hidden name="res34" value={{$res34}}>
                                <input type="number" hidden name="res35" value={{$res35}}>
                                <input type="number" hidden name="res36" value={{$res36}}>
                                <div class="text-right">
                                    <button class="py-3 px-8 bg-blue-500 text-green-100 font-bold rounded" type="submit">Check what 
                                        courses you should take 
                                    </button>
                                </div>
                            </form>
                  </div>
                
            
                </div>
                
            
                
            </div>
        </div>
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>