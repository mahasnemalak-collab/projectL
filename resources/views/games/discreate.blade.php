<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series of Numbers Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('{{asset('img/cross.jpg')}}')]   bg-cover bg-center flex flex-col">
    <x-navbar></x-navbar>
       
    <div class="flex flex-col items-center justify-center flex-grow mt-20">
        <form action="/test/games/discratepost" method="POST">
            @csrf
        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">S</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">N</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">A</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold"> 
                <select name="one" id="" class="text-red-500">
                    <option value="">K</option>
                    <option value="p">P</option>
                    <option value="">I</option>
                </select>
                @if (session('messageone'))
                        <div class="alert alert-info">
                            {{ session('messageone') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">p</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">E</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
                <select name="two" id="" class="text-red-500">
                    <option value="">A</option>
                    <option value="d">D</option>
                    <option value="">I</option>
                </select>
                @if (session('messagetwo'))
                        <div class="alert alert-info">
                            {{ session('messagetwo') }}
                        </div>
    @endif
            </div>
            
        </div>

        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">S</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
                <select name="three" id="" class="text-red-500">
                        <option value="m">M</option>
                        <option value="">D</option>
                        <option value="">H</option>
                    </select>
                    @if (session('messagethree'))
                        <div class="alert alert-info">
                            {{ session('messagethree') }}
                        </div>
    @endif

            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">A</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
            <select name="four" id="" class="text-red-500">
                    <option value="">P</option>
                    <option value="l">L</option>
                    <option value="">Q</option>
                </select>
                @if (session('messagefour'))
                        <div class="alert alert-info">
                            {{ session('messagefour') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">L</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">T</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">#</div>
           
        </div>
        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">A</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">N</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">I</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">M</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
                <select name="five" id="" class="text-red-500">
                        <option value="">O</option>
                        <option value="a">A</option>
                        <option value="">I</option>
                    </select>
                    @if (session('messagefive'))
                        <div class="alert alert-info">
                            {{ session('messagefive') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">L</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
            <select name="sex" id="sex" class="text-red-500">
                    <option value="">A</option>
                    <option value="">D</option>
                    <option value="s">S</option>
                </select>
                @if (session('messagesex'))
                        <div class="alert alert-info">
                            {{ session('messagesex') }}
                        </div>
    @endif
            </div>
            
        </div>

        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">A</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">N</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
            <select name="seven" id="" class="text-red-500">
                    <option value="">L</option>
                    <option value="">I</option>
                    <option value="g">G</option>
                </select>
                @if (session('messageseven'))
                        <div class="alert alert-info">
                            {{ session('messageseven') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">R</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">Y</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
            <select name="eight" id="" class="text-red-500">
                    <option value="">W</option>
                    <option value="o">O</option>
                    <option value="">I</option>
                </select>
                @if (session('messageeight'))
                        <div class="alert alert-info">
                            {{ session('messageeight') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">U</div>
            
        </div>

        <div class="flex space-x-8 mb-8">
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">A</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">
            <select name="nine" id="" class="text-red-500">
                    <option value="">C</option>
                    <option value="">R</option>
                    <option value="t">T</option>
                </select>
                @if (session('messagenine'))
                        <div class="alert alert-info">
                            {{ session('messagenine') }}
                        </div>
    @endif
            </div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">e</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">m</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">o</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">B</div>
            <div class="w-24 h-24 flex items-center justify-center bg-white rounded shadow-lg text-4xl font-bold">N</div>
            
        </div>
       
        <button type="submit" class="bg-white w-24 h-12 hover:bg-red-300 transition-colors duration-300">submit</button>
        </form>
    </div>
</body>
</html>
